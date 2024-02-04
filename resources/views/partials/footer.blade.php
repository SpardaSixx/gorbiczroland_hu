<footer class="p-3">
    <div class="row">
        <div class="col-12 col-md-4 col-lg-4 text-center text-md-start mb-sm">
            <a href="{{route('stack')}}" class="d-inline-block">Stack</a><br>
            <a href="{{route('references')}}" class="d-inline-block">Referenciák</a><br>
            <a href="{{route('cv')}}" class="d-inline-block">CV</a><br>
            <a href="{{route('contact')}}" class="d-inline-block">Kapcsolat</a>
        </div>

        <div class="col-12 col-md-4 col-lg-4 text-center mb-sm">
            <span class="material-symbols-outlined copyright">
                copyright
            </span>
            gorbiczroland.hu
            <br>
            2018 - {{date("Y")}}
        </div>

        <div class="col-12 col-md-4 col-lg-4 text-center text-md-end">
            <a href="https://gdprmost.hu/cookie-tajekoztato">Sütik</a>
        </div>
    </div>
</footer>