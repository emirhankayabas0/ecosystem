<div class="weather hide-768">
    <div class="header">
        <div class="region"></div>
    </div>
    <div class="dropdown-divider"></div>
    <div class="main">
        <div class="realtime">
            <div class="">
                <div class="text"></div>
                <div class="temp"></div>
            </div>
            <div class="icon"><img src="" alt=""></div>
        </div>
        <div class="days d-flex justify-content-between align-items-center">
            <div class="day-1">
                <div class="day-name">
                    <script>
                        if (localStorage.getItem("key") == "us") {
                            document.write("Today")
                        } else {
                            document.write("Bugün")
                        }
                    </script>
                </div>
                <div class="icon"><img src="" alt=""></div>
                <div class="temp-max"></div>
                <div class="temp-min"></div>
            </div>
            <div class="day-2">
                <div class="day-name">
                    <script>
                        if (localStorage.getItem("key") == "us") {
                            document.write("Tomorrow")
                        } else {
                            document.write("Yarın")
                        }
                    </script>
                </div>
                <div class="icon"><img src="" alt=""></div>
                <div class="temp-max"></div>
                <div class="temp-min"></div>
            </div>
            <div class="day-3">
                <div class="day-name">
                    <script>
                        if (localStorage.getItem("key") == "us") {
                            document.write("Next day")
                        } else {
                            document.write("Ertesi Gün")
                        }
                    </script>
                </div>
                <div class="icon"><img src="" alt=""></div>
                <div class="temp-max"></div>
                <div class="temp-min"></div>
            </div>
        </div>
    </div>
</div>