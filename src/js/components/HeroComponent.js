export default {
    template: `
    <div class="hero">
        <div class="jumbotron">


            <h1 class="display-3 title">Ontario Summer</h1>
            <h2 class="subtitle">Find yourself at home</h2>

            <div class="bottom-line d-flex justify-content-between">
                <div>
                    <img src="/images/Location.svg" alt="location" /> <span>Toronto</span>
                </div>

                <img src="images/scroll_icon.svg" alt="scroll" class="scroll" />

                <div class="social">

                    <a class="social" href="#"><object data="images/instagram.svg" type="image/svg+xml"></object></a>
                    <a class="social" href="#"><object data="images/facebook.svg" type="image/svg+xml"></object></a>
                    <a class="social" href="#"><object data="images/twitter.svg" type="image/svg+xml"></object></a>
                    <a class="social" href="#"><object data="images/youtube.svg" type="image/svg+xml"></object></a>


                </div>

            </div>
        </div>
        

        <div class="home">
            <p class="welcome-text text-left m-lg-5">
                Everything in Canada inevitably leads back to Ontario. The country’s most populated province by a wide margin, one in three Canadians dwell within its borders, along with practically everything powerful and important. Among other landmarks, Ontario houses Canada’s parliament, its largest city, the national stock exchange, the country’s biggest university, the headquarters of virtually every major Canadian newspaper, television station, corporation, and bank, and — just to top it off — Canada’s tallest building and biggest waterfall, too.
            </p>

            <div class="video text-center travel">

                <video  controls  poster="/images/video_cover_desktop.jpg" class="embed-responsive">
                <source src="/video/SummerOntario.mp4" type="video/mp4" class="embed-responsive">

                    No video for you today.
                    </video>
            </div>

            <h2 class="text-center travel"> TRAVEL IDEAS</h2>
            <div class="travel-ideas row  justify-content-center">

                <div class="left col-12 col-md-5 m-3">
                    <h3 class="m-0 adventure text-center mb-sm-4">
                        Looking for the perfect advanture?
                    </h3>
                    <img src="/images/city.jpg" alt="city" class="city m-2 img-fluid" />
                </div>









                <div class="right col-12 col-md-5 m-3">


                    <img src="/images/lakes.jpg" alt="cities" class="img-fluid" />
                    <p class="p-text mt-5 p-4">
                        Ontario’s power comes at a price, however, and Canadians who live outside its borders will often regard it with a mixture of resentment and skepticism — surely they don’t deserve all that.
                    </p>


                </div>

            </div>

        </div>
    </div>`
}