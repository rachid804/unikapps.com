<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="{{ $class }}">
<header>
    <nav class="navbar navbar-expand-md navbar-light main-navbar">
        <div class="container">
            <a href="/" class="navbar-brand text-dark">
                Unikapps
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav"
                    aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex" id="mainNav">
                <ul class="navbar-nav mr-auto ml-3">
                    <li class="nav-item"><a href="#" class="nav-link active">HOME</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">BLOG</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">PORTFOLIO</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">CONTACT</a></li>
                </ul>
                <form class="form-inline my-2 my-md-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
</header>
<main role="main">
    <!-- Introduction Section (Hi Section) -->
    <section class="hi-section">
        <div class="container text-white text-center">
            <h1>Hi, my name is Rachid es-sakhi</h1>
            <h2>My mission is to help entrepreneurs put their business online</h2>
            <a href="#" class="btn btn-primary btn-lg">CONTACT ME</a>
        </div>
    </section>

    <!-- Recent blog posts-->
    <section class="recent-blog-posts section bg-white">
        <div class="container">
            <div class="section__heading">
                <h3>Recent Blog Posts</h3>
            </div>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="https://picsum.photos/350/200?image=0" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Post title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link">Read more</a>
                        <span>200 Likes</span>
                        <span>53 comments</span>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://picsum.photos/350/200?image=1" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Post title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link">Read more</a>
                        <span>200 Likes</span>
                        <span>53 comments</span>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://picsum.photos/350/200?image=2" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Post title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link">Read more</a>
                        <span>200 Likes</span>
                        <span>53 comments</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Latest Work-->
    <section class="recent-blog-posts section bg-gray-100">
        <div class="container">
            <div class="section__heading">
                <h3>My Work Sample</h3>
                <span>Lot of recent project are not listed here</span>
            </div>

            <div class="card-group">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top" src="https://picsum.photos/350/200?image=0" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Project #1</h5>
                        <a href="#" class="card-link">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img class="card-img-top" src="https://picsum.photos/350/200?image=1" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Project #2</h5>
                        <a href="#" class="card-link">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img class="card-img-top" src="https://picsum.photos/350/200?image=2" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Project #3</h5>
                        <a href="#" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col footer__get-in-touch">
                <h4>Get in touch</h4>
                <p>Feel free to contact me for any development related mater.</p>
                <div>
                    <a href="#" class="btn btn-light" title="Email Me">@</a>
                    <a href="#" class="btn btn-light" title="My GitHub">G</a>
                    <a href="#" class="btn btn-light" title="LinkedIn">L</a>
                    <a href="#" class="btn btn-light" title="Facebook">F</a>
                </div>
            </div>
            <div class="col footer__newsletter">
                <h4>Blog NewsLetter</h4>
                <p>Get notified about new blog posts, I hate spam too ;)</p>
                <form action="#" class="form-inline">
                    <div class="form-group _name">
                        <label for="name" class="sr-only">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group _email">
                        <label for="email" class="sr-only">Your email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Your email Address" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
</body>
</html>