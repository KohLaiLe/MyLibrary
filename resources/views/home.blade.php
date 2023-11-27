@extends('layout.template')
@section('title', 'Home')

@section('content')
    <div class="row m-5">
        @foreach($books as $book)
            <div class="col-md-3 col-lg-3 col-xl-2 mb-4">
                <div class="card" style="width: 256px; height: 512px;">
                    <img src="{{ $book->ImageURL }}" class="card-img-top" alt="{{ $book->Title }}"
                         style="max-width: 100%; max-height: 50%;">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ strlen($book->Title) > 15 ? substr($book->Title, 0, 30) . ' ...' : $book->Title }}
                        </h5>
                        <p class="card-text">Category: {{ $book->bookCategory->Description ?? 'N/A' }}</p>
                        @if($book->IsAvailable === 0)
                            <div class="alert alert-warning" role="alert">
                                Not Available
                            </div>
                        @endif
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                        <a href="#" class="btn btn-primary btn-sm show-details"
                           data-book='@json($book)'
                           data-bs-toggle="modal"
                           data-bs-target="#bookDetailsModal">
                            Details
                        </a>
                        @if($book->IsAvailable === 0)
                            <button class="btn btn-success btn-sm" disabled>Borrow</button>
                        @else
                            <button class="btn btn-success btn-sm">Borrow</button>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $books->links() }}
    </div>

    <!-- Showing results text -->
    <div class="text-center mt-3">
        Showing {{ $books->firstItem() }} to {{ $books->lastItem() }} of {{ $books->total() }} results
    </div>


    <div class="modal fade" id="bookDetailsModal" tabindex="-1" aria-labelledby="bookDetailsModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookDetailsModalLabel">Book Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <img id="bookDetailImage" src="" alt="Book Image" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h5 id="bookDetailTitle"></h5>
                                <p id="bookDetailAuthor"></p>
                                <p id="bookDetailISBN"></p>
                                <p id="bookDetailAvailability"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="borrowButton">Borrow</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.show-details').click(function () {
                // Get book details
                var book = $(this).data('book');
                console.log(book);

                // Set modal content with book details
                $('#bookDetailImage').attr('src', book.ImageURL);
                $('#bookDetailTitle').text(book.Title);
                $('#bookDetailAuthor').text('Author: ' + book.Author);
                $('#bookDetailISBN').text('ISBN: ' + book.ISBN);
                $('#bookDetailAvailability').text('Availability: ' + (book.IsAvailable ? 'Available' : 'Not Available'));

                if (book.IsAvailable === 0) {
                    $('#borrowButton').prop('disabled', true); // Disable Borrow button if book is not available
                } else {
                    $('#borrowButton').prop('disabled', false); // Enable Borrow button if book is available
                }

                // Show modal
                $('#bookDetailsModal').modal('show');
            });

            // Handle borrow button click
            $('#borrowButton').click(function () {
                // Perform borrow action or other logic here
                // This function will execute when the Borrow button is clicked in the modal
            });
        });
    </script>
@endsection

