<x-layout>
    <section class="trtr_hero_wrapper">
        <div class="container">
            <div class="trtr_hero_details">
                <div class="text-center">
                    <h1 style="margin-bottom: 0px; color: whitesmoke">Find Your Bus</h1>
                    <!-- <h1>Your Gateway To Seamless Bus Journeys</h1> -->
                    <!-- <p>Sodales ante facilisis natoques eros quisque suspendisse. Pretium sed sit habitasse cras ium fermentum. Dui semper mi gravida hac vel imperdiet luctus diam tempu.</p> -->
                </div>

                <!-- Destination Search Form Start -->
                <div>
                    <div class="trtr_login">
                        <div class="trtr_validation_wrapper">
                            <form class="row needs-validation align-items-center" enctype="multipart/form-data">
                                <div class="col-md-6 mb-4">
                                    <label for="exampleFormControlFile1" class="form-label mb-4">Form</label>
                                    <select id="from" class="form-control" name="from">
                                        <option value="">Select From</option>
                                        <option value="CityA">City A</option>
                                        <option value="CityB">City B</option>
                                        <option value="CityC">City C</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="exampleFormControlFile1" class="form-label mb-4">To</label>
                                    <select id="to" class="form-control" name="to">
                                        <option value="">Select To</option>
                                        <option value="CityX">City X</option>
                                        <option value="CityY">City Y</option>
                                        <option value="CityZ">City Z</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn px-5" onclick="searchDestinations()">Search</button>
                                </div>

                            </form>
                            <div class="result-container" id="results">
                                <p class="result-title">Search Results:</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Destination Search Form End -->
            </div>
        </div>
    </section>
</x-layout>