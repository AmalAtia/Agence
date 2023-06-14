<!-- 
<div class="row">
   
    <div class="col-md-12 mb-3">
        <div class="middle" >
       
            <div id="multi_range" >
                <span id="left_value">25</span><span> ~ </span><span id="right_value">75</span>
            </div>
            <div class="multi-range-slider my-2"   >
                <input type="range" id="input_left" class="range_slider" min="0" max="500" value="50" onmousemove="left_slider(this.value)">
                <input type="range" id="input_right" class="range_slider" min="0" max="500" value="200" onmousemove="right_slider(this.value)">
                <div class="slider">
                    <div class="track"></div>
                    <div class="range"></div>
                    <div class="thumb left"></div>
                    <div class="thumb right"></div>
                </div>
            </div>
        </div>
    </div>
   
</div> -->


<div class="card search-filter">
                    <div class="card-body">
                        <!-- <h4>Filter par prix</h4> -->
                        <div class="col-md-5 mb-3">

                            <div class="middle" style="width: 250px;margin-left: -30px;">
                                <div id="multi_range">
                                    <span id="left_value">400</span><span> ~ </span><span id="right_value">3200</span>
                                </div>
                                <div class="multi-range-slider my-2">
                                    <input type="range" id="input_left" class="range_slider" min="0"
                                        max="2000" value="400" onmousemove="left_slider(this.value)">
                                    <input type="range" id="input_right" class="range_slider" min="0"
                                        max="4000" value="3200" onmousemove="right_slider(this.value)">
                                    <div class="slider">
                                        <div class="track"
                                            style="
                                        background-color: #f0ad4e69;
                                    ">
                                        </div>
                                        <div class="range"></div>
                                        <div class="thumb left"></div>
                                        <div class="thumb right"></div>
                                    </div>
                                </div>
                                {{-- <a id="FilterByPrice" type="button"
                                    style="border: 2px solid #299617;
                                padding: 10px;
                                width: 200px;background-color: #FFF; color:#000; border-radius: 157px;
                                font-weight: 400;margin-top:20px;text-align: center;"
                                   >
                                     Filter</a> --}}
                            </div>
                        </div>
                    </div>
                </div>

