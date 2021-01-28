@extends('layouts.app')
@extends('layouts.header')
@section('content')
<div id="home" class="row">
    <br>
    <div class="col">
        <h4 id="welcome" class="text-center">
            Welcome
        </h4>
        <h1 id="bio" class="text-center my-5">
            I'm a Graphic Designer.
        </h1>
        <p id="bio__text" class="text-center">It is a long established fact that a reader will be of a page when <br>
            established fact looking at its layout.
        </p>

        <div class="row justify-content-center mt-4 mb-5">
            <button id="download__btn" type="button" class="btn btn-outline-light text-center"> DOWNLOAD CV </button>
        </div>
        <br>
        <div class="row justify-content-center my-4 pb-4 pt-5">
            <button id="cursor__btn" type="button" class="btn btn-outline-light font-weight-normal"> I </button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="row justify-content-center">
            <img id="img" src="/about.jpg" alt="foto profil">
        </div>
    </div>
    <div id="col__about" class="col ml-4">
        <h2>
            About Me
        </h2>
        <h4 class="my-3">
            Hello! I'm Donny
        </h4>
        <p>It is a long established fact that a reader will be distracted by the readable <br>
            content of a page when looking at its layout.
        </p>
        <p>The point of using Lorem Ipsum is that it has a more-or-less normal <br>
            distribution of letters, as opposed to using 'Content here, content here', <br>
            making it look like readable English
        </p>
        <p>There are many variations of passages of Lorem Ipsum available, but the <br>
            majority have suffered alteration in some form, by injected humour, or <br>
            randomised words which don't look even slightly believable.
        </p>

        <div class="mt-4">
            <button id="sosmed__btn" type="button" class="btn btn-outline-dark text-center mr-2"> f </button>
            <button id="sosmed__btn" type="button" class="btn btn-outline-dark text-center"> in </button>
        </div>
    </div>
</div>

<div id="row__services" class="row mb-5">
    <div class="col text-center">
        <h1>Services</h1>
        <p class="mt-4">It is a long established fact that a reader will be of a page when <br>
            established fact looking at its layout.</p>
    </div>
</div>

<div id="row__contentServices" class="row justify-content-center">
    <div class="card-deck w-75 text-center">
        <div class="card">
            <img id="img__card" class="card-img-top" src="/twitter.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Graphic Design</h5>
                <br>
                <p class="card-text">
                    This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
        </div>
        <div class="card">
            <img id="img__card" class="card-img-top" src="/twitter.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Web Developer</h5>
                <br>
                <p class="card-text">
                    This card has supporting text below as a natural lead-in to additional content.
                    This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.
                </p>
            </div>
        </div>
        <div class="card">
            <img id="img__card" class="card-img-top" src="/twitter.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Mobile Developer</h5>
                <br>
                <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in to additional content.
                    This card has even longer content than the first to show that equal height action.
                    This is a wider card with supporting text below as a natural lead-in to additional content.
                </p>
            </div>
        </div>
    </div>
</div>

<div id="row__freelance" class="row text-center">
    <div class="col">
        <h1>I Am Available For Freelancer</h1>

        <div class="row justify-content-center mt-4">
            <button id="hire__btn" type="button" class="btn"> <b>HIRE ME!</b> </button>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col text-center">
        <h1>My Works</h1>
        <p class="mt-4">It is a long established fact that a reader will be of a page when <br>
            established fact looking at its layout.</p>
    </div>
</div>

<div class="row justify-content-center mb-4">
    <div class="col-auto">
        <img id="img__portofolio" src="/1.jpg" alt="">
    </div>
    <div class="col-auto">
        <img id="img__portofolio" src="/1.jpg" alt="">
    </div>
    <div class="col-auto">
        <img id="img__portofolio" src="/1.jpg" alt="">
    </div>
</div>
<div class="row justify-content-center mb-5">
    <div class="col-auto">
        <img id="img__portofolio" src="/1.jpg" alt="">
    </div>
    <div class="col-auto">
        <img id="img__portofolio" src="/1.jpg" alt="">
    </div>
    <div class="col-auto">
        <img id="img__portofolio" src="/1.jpg" alt="">
    </div>
</div>

<div id="row__contact" class="row">
    <div class="col text-center">
        <h1>Contact Me</h1>
        <p class="mt-4">It is a long established fact that a reader will be of a page when <br>
            established fact looking at its layout.</p>

        <div class="row justify-content-center mt-5">
            <div class="card-deck w-50 text-center">
                <div class="card border-light">
                    <img id="img__cardContact" class="card-img-top" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHBhdGggZD0iTTQ4NS43NDMsODUuMzMzSDI2LjI1N0MxMS44MTUsODUuMzMzLDAsOTcuMTQ4LDAsMTExLjU4OVY0MDAuNDFjMCwxNC40NCwxMS44MTUsMjYuMjU3LDI2LjI1NywyNi4yNTdoNDU5LjQ4NyAgICBjMTQuNDQsMCwyNi4yNTctMTEuODE1LDI2LjI1Ny0yNi4yNTdWMTExLjU4OUM1MTIsOTcuMTQ4LDUwMC4xODUsODUuMzMzLDQ4NS43NDMsODUuMzMzeiBNNDc1Ljg5LDEwNS4wMjRMMjcxLjEwNCwyNTguNjI2ICAgIGMtMy42ODIsMi44MDItOS4zMzQsNC41NTUtMTUuMTA1LDQuNTI5Yy01Ljc3LDAuMDI2LTExLjQyMS0xLjcyNy0xNS4xMDQtNC41MjlMMzYuMTA5LDEwNS4wMjRINDc1Ljg5eiBNMzY2LjUsMjY4Ljc2MSAgICBsMTExLjU5LDEzNy44NDdjMC4xMTIsMC4xMzgsMC4yNDksMC4yNDMsMC4zNjgsMC4zNjhIMzMuNTQyYzAuMTE4LTAuMTMxLDAuMjU2LTAuMjMsMC4zNjgtMC4zNjhMMTQ1LjUsMjY4Ljc2MSAgICBjMy40MTktNC4yMjcsMi43NzEtMTAuNDI0LTEuNDY0LTEzLjg1MWMtNC4yMjctMy40MTktMTAuNDI0LTIuNzcxLTEzLjg0NCwxLjQ1N2wtMTEwLjUsMTM2LjUwMVYxMTcuMzMybDIwOS4zOTQsMTU3LjA0NiAgICBjNy44NzEsNS44NjIsMTcuNDQ3LDguNDQyLDI2LjkxMiw4LjQ2OGM5LjQ1Mi0wLjAyLDE5LjAzNi0yLjYsMjYuOTEyLTguNDY4bDIwOS4zOTQtMTU3LjA0NnYyNzUuNTM0TDM4MS44MDcsMjU2LjM2NyAgICBjLTMuNDItNC4yMjctOS42MjMtNC44NzctMTMuODQ0LTEuNDU3QzM2My43MjksMjU4LjMyOSwzNjMuMDc5LDI2NC41MzQsMzY2LjUsMjY4Ljc2MXoiIGZpbGw9IiNmZjUzNTMiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
                    <div class="card-body">
                        <h5 class="card-title mb-0">Email Me At</h5>
                        <p class="card-text">
                            doniwahyu14@gmail.com
                        </p>
                    </div>
                </div>
                <div class="card border-light">
                    <img id="img__cardContact" class="card-img-top" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHBhdGggZD0iTTI5OC42NjcsMjUuNmgtODUuMzMzYy00LjcxLDAtOC41MzMsMy44MjMtOC41MzMsOC41MzNjMCw0LjcxLDMuODIzLDguNTMzLDguNTMzLDguNTMzaDg1LjMzMyAgICBjNC43MSwwLDguNTMzLTMuODIzLDguNTMzLTguNTMzQzMwNy4yLDI5LjQyMywzMDMuMzc3LDI1LjYsMjk4LjY2NywyNS42eiIgZmlsbD0iI2ZmNTk0NyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNMzU4LjQsMjUuNmgtOC41MzNjLTQuNzEsMC04LjUzMywzLjgyMy04LjUzMyw4LjUzM2MwLDQuNzEsMy44MjMsOC41MzMsOC41MzMsOC41MzNoOC41MzMgICAgYzQuNzEsMCw4LjUzMy0zLjgyMyw4LjUzMy04LjUzM0MzNjYuOTMzLDI5LjQyMywzNjMuMTEsMjUuNiwzNTguNCwyNS42eiIgZmlsbD0iI2ZmNTk0NyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNMjY2LjU5OCw0MzUuMkgyNDUuNDFjLTEyLjk3OSwwLTIzLjU0MywxMC41NjQtMjMuNTQzLDIzLjU0M3Y0LjEyMmMwLDEyLjk3OSwxMC41NjQsMjMuNTM1LDIzLjUzNSwyMy41MzVoMjEuMTg4ICAgIGMxMi45NzksMCwyMy41NDMtMTAuNTU2LDIzLjU0My0yMy41MzV2LTQuMTIyQzI5MC4xMzMsNDQ1Ljc2NCwyNzkuNTY5LDQzNS4yLDI2Ni41OTgsNDM1LjJ6IE0yNzMuMDY3LDQ2Mi44NjUgICAgYzAsMy41NjctMi45MDEsNi40NjgtNi40NjgsNi40NjhIMjQ1LjQxYy0zLjU3NSwwLTYuNDc3LTIuOTAxLTYuNDc3LTYuNDY4di00LjEyMmMwLTMuNTc1LDIuOTAxLTYuNDc3LDYuNDc3LTYuNDc3aDIxLjE4ICAgIGMzLjU3NiwwLDYuNDc3LDIuOTAxLDYuNDc3LDYuNDc3VjQ2Mi44NjV6IiBmaWxsPSIjZmY1OTQ3IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik0zNzAuMjI3LDBIMTQxLjc4MWMtMTcuMDA3LDAtMzAuODQ4LDEzLjg0MS0zMC44NDgsMzAuODQ4djQ1MC4zMDRjMCwxNy4wMDcsMTMuODQxLDMwLjg0OCwzMC44NDgsMzAuODQ4aDIyOC40MzcgICAgYzE3LjAwNywwLDMwLjg0OC0xMy44NDEsMzAuODQ4LTMwLjgzOVYzMC44NDhDNDAxLjA2NywxMy44NDEsMzg3LjIyNiwwLDM3MC4yMjcsMHogTTM4NCw0ODEuMTUyICAgIGMwLDcuNTk1LTYuMTc4LDEzLjc4MS0xMy43NzMsMTMuNzgxSDE0MS43ODFjLTcuNjAzLDAtMTMuNzgxLTYuMTg3LTEzLjc4MS0xMy43NzNWMzAuODQ4YzAtNy41OTUsNi4xNzgtMTMuNzgxLDEzLjc4MS0xMy43ODEgICAgaDIyOC40MzdjNy42MDMsMCwxMy43ODEsNi4xODcsMTMuNzgxLDEzLjc4MVY0ODEuMTUyeiIgZmlsbD0iI2ZmNTk0NyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNMzkyLjUzMyw1MS4ySDExOS40NjdjLTQuNzEsMC04LjUzMywzLjgyMy04LjUzMyw4LjUzM3YzNTguNGMwLDQuNzEsMy44MjMsOC41MzMsOC41MzMsOC41MzNoMjczLjA2NyAgICBjNC43MSwwLDguNTMzLTMuODIzLDguNTMzLTguNTMzdi0zNTguNEM0MDEuMDY3LDU1LjAyMywzOTcuMjQ0LDUxLjIsMzkyLjUzMyw1MS4yeiBNMzg0LDQwOS42SDEyOFY2OC4yNjdoMjU2VjQwOS42eiIgZmlsbD0iI2ZmNTk0NyIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
                    <div class="card-body">
                        <h5 class="card-title mb-0">Call Me On</h5>
                        <p class="card-text">
                            +985 123 7856
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <form id="contact__form" action="">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Your Name*">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Your Email*">
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 ">
                    <input type="text" class="form-control" placeholder="Your Subject">
                </div>
            </div>
            <div class="row">
                <div class="col mt-4 ">
                    <textarea type="text" class="form-control" placeholder="Your message.." rows="5"></textarea>
                </div>
            </div>
            <div class="row justify-content-end pr-3">
                <button class="btn mt-4" type="submit"> <b>SEND MESSAGE</b></button>
            </div>
        </form>
    </div>
</div>

<div id="row__footer" class="row">
    <div class="col">
        <div class="row justify-content-center">
            <button type="button" class="btn btn-outline-light active mr-2"> f </button>
            <button type="button" class="btn btn-outline-light active mr-2"> in </button>
            <button type="button" class="btn btn-outline-light active mr-2">
                <img src="/twitter.png" alt="">
            </button>
        </div>

        <div class="row mt-3 text-center">
            <div class="col">
                <h5 id="h5__footer">2020 - 2021 © Donny Design.</h5>
            </div>
        </div>
    </div>

</div>

@endsection