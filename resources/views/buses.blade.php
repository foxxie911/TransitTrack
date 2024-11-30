<x-layout>
    <div class="trtr_hero_wrapper">
        <div class="trtr_hero_details">
            <h1 class="h1"
                style="text-align: center; font-weight: 600;">
                {{ $company }}
            </h1>
            <div class="container">
                <div class="row">
                    <div class="col-4 border-end">
                        <h3 class="h3"
                            style="color: whitesmoke">
                            Stopages
                        </h3>
                        @foreach ($locations as $location)
                        <ul class="list-group pt-2">
                            <a href=""
                                class="rounded-3"
                                style="text-decoration-line: none;">
                                <li class="list-group-item"
                                    style="background-color: rgba(27, 28, 30, 0.3); color: whitesmoke">
                                    {{ $location }}
                                </li>
                            </a>
                        </ul>
                        @endforeach
                    </div>
                    <div class="col-8">
                        <p>somethign sdiaoikj afonb alih alisdj</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>