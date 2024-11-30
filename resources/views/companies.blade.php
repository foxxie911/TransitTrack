<x-layout>
    <section class="trtr_hero_wrapper">
        <div class="container">
            <div class="trtr_hero_details">
                <div class="text-center">
                    <h1 style="margin-bottom: 0px; color: whitesmoke">Find Your Bus</h1>
                    <p style="color: whitesmoke;">Your Gateway To Seamless Bus Journeys</p>
                    <!-- <p>Sodales ante facilisis natoques eros quisque suspendisse. Pretium sed sit habitasse cras ium fermentum. Dui semper mi gravida hac vel imperdiet luctus diam tempu.</p> -->
                </div>

                <!-- Destination Search Form Start -->
                <div>
                    <div class="trtr_login">
                        <div class="trtr_validation_wrapper">
                            <form id="company-search"
                                method="POST"
                                class="row needs-validation align-items-center"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6 mb-4">
                                    <label for="from" class="form-label mb-4">From</label>
                                    <input type="text" id="from" list="from" class="form-control" name="from" required />
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="to" class="form-label mb-4">To</label>
                                    <input type="text" id="to" class="form-control" name="to" list="to" required />
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn">Search</button>
                                </div>
                            </form>
                            <div class="result-container" id="results">
                                <h3 class="result-title" style="color: whitesmoke;">Bus List</h3>
                                @if ($companies)
                                <div>
                                    @foreach ($companies as $company)
                                    <ul class="list-group pt-2">
                                        <a href="/buses/{{ $company->id }}"
                                            class="rounded-3"
                                            style="text-decoration-line: none;">
                                            <li class="list-group-item"
                                                style="background-color: rgba(27, 28, 30, 0.3); color: whitesmoke">
                                                {{$company -> company_name}}
                                            </li>
                                        </a>
                                    </ul>
                                    @endforeach
                                </div>
                                @else
                                <p class="text-center">Nothing to show</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>