<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <a class="navbar-brand" href="/">{{config('app.name', 'SiipurLara')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item" style="background-color: green">
            <a class="nav-link" href="/posts">|| <strong>Blog or Artikel</strong> ||</a>
        </li>
        <li class="nav-item" style="background-color: green">
            <a class="nav-link" href="/posts/create">|| <strong>(+) Buat Artikel</strong> ||</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
    </div>
</nav>
<br/>