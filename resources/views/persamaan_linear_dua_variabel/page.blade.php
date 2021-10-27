<footer>
    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                {{-- <a class="page-link" href="{{url()->previous()}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a> --}}
                </li>
                <li class="page-item"><a class="page-link" href="{{route('spldv_1')}}">1</a></li>
                <li class="page-item"><a class="page-link" href="{{route('spldv_2')}}">2</a></li>
                <li class="page-item"><a class="page-link" href="{{route('spldv_3', 1)}}">3</a></li>
                <li class="page-item">
                {{-- <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a> --}}
                </li>
            </ul>
        </nav>
    </div>
</footer>
