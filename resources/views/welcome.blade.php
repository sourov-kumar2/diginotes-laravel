@include('inc.topbar')
@include('inc.navbar')

<!-- Add Bootstrap CSS and JS links -->

<div class="container">
    <div class="row">
        @foreach ($notes as $note)
            <div class="note card col-lg-3 col-md-4 col-sm-6 mb-4 ml-3 mt-3" style="background-color: #ffeb3b;">
                <div class="card-body" style="color: black;">
                    <h3 class="card-title">{{$note->title}}</h3>
                    <p class="card-text">{{$note->content}}</p>
                    <p class="card-text">Category: {{$categories->firstWhere('id', $note->category_id)->name}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('inc.footer')
