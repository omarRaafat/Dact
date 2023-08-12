@extends('layouts.subApp')

@section('content')

    <style>
        /* Style the form */
        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
    </style>



    <!-- MultiStep Form -->
    <div class="container">
        <div class="">
            <form id="regForm" action="{{url('/exam/result')}}" method="POST" class="card">
@csrf
                <h1>Food Safety Program Test:</h1>
                @if(auth()->user()->test1)
                    <h3 class="alert-danger">YOU HAVE GOT   {{auth()->user()->test1}}   OUT   OF   47</h3>
                @else
<br>
                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                    1-	You can always smell, see, or taste harmful bacteria in food that can cause illness:

<br><br>
                    <label class="radio-inline"><input type="radio" name="ans1" >True</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans1" value="1">False</label>
<hr>
                    2-	For how long (at a minimum) should you wash your hands before and after handling food?

                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans2" >15 Seconds</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans2" value="1" >20 Seconds</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans2">60 Seconds</label>
<hr>

                    3-	Most food allergies are caused by contact with the proteins in milk, eggs, fish, Crustacean shellfish, tree nuts, wheat, peanuts, or soybeans. Persons experience allergic reactions only by consuming these foods.

                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans3" >True</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans3" value="1">False</label>

<hr>
                    4-	There is nothing wrong with using the same knife for cutting vegetables that you use for raw meats, poultry, seafood, and eggs.
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans4" >True</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans4" value="1">False</label>

                </div>

                <div class="tab">
                    5-	Hot foods should be maintained at a temperature of ____degrees Fahrenheit or higher
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans5" >100</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans5" >120</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans5" >135</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans5" value="1">140</label>
<hr>
                    6-	Which of the following processes kills harmful bacteria in milk?
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans6" >Sterilization    </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans6" >Preservation     </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans6" value="1" >Pasteurization    </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans6">Fermentation</label>
<hr>
                    7-	 Foodborne diseases can cause death
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans7" value="1" >True</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans7">False</label>
<hr>
                    8-	If food looks OK and smells OK it is always safe to eat.
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans8" >True</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans8" value="1">False</label>
                </div>

                <div class="tab">
                    9-	 Some microorganisms are useful to make food and drinks
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans9" value="1" >True</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans9">False</label>
<hr>
                    10-	The proper temperature for a home refrigerator should be
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans10" >Below 8°C (46°F)        </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans10" value="1">Below 5°C (41°F)</label>
<hr>
                    11-	 Keeping raw and cooked food separate prevents cross-contamination
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans11" value="1" >True</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans11">False</label>
<hr>
                    12-	 You should use soap to clean your fruits and vegetables before eating them.
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans12" >True</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans12">False</label>
                </div>

                <div class="tab">
                    13-	Don't buy food in damaged containers at the grocery
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans13" value="1" >True</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans13">False</label>
                    <hr>
                    14-	 A product that has passed its "Best If Used By" date should be discarded because it is no longer safe to eat.
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans14"  >True</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans14" value="1">False</label>
                    <hr>
                    15-	When you buy hot foods, you should eat them within two hours.
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans15" value="1" >True</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans15">False</label>
                    <hr>
                    16-	To kill any Salmonella present on or inside a raw egg, cook eggs until the yolk is firm.
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans16" value="1" >True</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans16">False</label>
                </div>

                <div class="tab">
                    17-	You should never defrost food at room temperature.
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans17" value="1" >True</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans17">False</label>
                    <hr>
                    18-	The best way to avoid food poisoning is to
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans18" >Use bacterial soaps </label>&nbsp;&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans18" >Buy only organic food</label>&nbsp;&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans18" >Eat only at home, not at restaurants</label>&nbsp;&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans18" value="1" > Wash your hands with plain soap and water before and after handling food</label>
                    <hr>
                    19-	Cooked foods should be refrigerated within
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans19"  >30 minutes</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans19" value="1" >2 hours</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans19" >3 hours</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans19">4 hours</label>
                    <hr>
                    20-	Which are potential sources of foodborne illness?
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans20" >Raw eggs, poultry, beef, seafoo</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans20" >Unwashed produce         </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans20" >Raw sprouts</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans20">Unpasteurized milk, apple juice and apple cider</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans20" value="1">all</label>

                </div>

                <div class="tab">
                    21-	Which cutting board is safer?
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans21" value="1" >Plastic</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans21">wooden</label>
                    <hr>
                    22-	It’s safe to refreeze thawed or partially thawed foods
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans22" >True</label>&nbsp;&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans22" value="1" >False</label>&nbsp;&nbsp;
                    <hr>
                    23- If you drop food on the floor it is ok to eat:
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans23"  > If you pick it up before 1 second</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans23"  > If you pick it up before 5 seconds</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans23" >If you’ve dropped it on a smoothed tiled surface</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans23" value="1"> It’s best not to eat at all</label>
                    <hr>
                    24- Food poisoning can cause:
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans24" >Vomiting</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans24" >Diarrhea    </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans24" > Reactive arthritis     </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans24">Kidney damage     </label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans24">Nerve damage         </label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans24">Hepatitis </label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans24">Death</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans24" value="1">All of the above                             </label>

                </div>

                <div class="tab">
                    25-   Unpasteurized (raw) milk is
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans25" >Good for you as it has more vitamins    </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans25"  >Healthier as it has good bacteria</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans25" value="1" >Riskier as it can be contaminated with harmful bacteria </label>
                   <hr>
                    26-  What is the "danger zone" range of temperature in food handling"
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans26" >50 - 100 F   </label>&nbsp;&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans26" >80 - 120 F      </label>&nbsp;&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans26" value="1" >40 - 140 F      </label>&nbsp;&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans26"  >100 - 212 F</label>
                    <hr>
                    27-  Sugar and salt act as preservatives by:
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans27"  > killing microorganisms directly </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans27"  > increasing the water content of food </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans27" >increasing the acid content of the food </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans27" value="1"> binding water so it is not available for microorganisms</label>
                    <hr>
                    28- Food irradiation to preserve foods is dangerous and outlawed by the government
                    <br><br>

                    <label class="radio-inline"><input type="radio" name="ans28" >True </label>&nbsp;	&nbsp;
                        <label class="radio-inline"><input type="radio" name="ans28" value="1">False</label>

                </div>

                <div class="tab">
                    29-  Safe methods for thawing foods include all of the following EXCEPT:
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans29" >thawing under cold running water    </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans29" value="1"  >thawing in the refrigerator</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans29"  >thawing in a sink of warm water</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans29"  >  thawing in the microwave</label>


                    <hr>
                    30-  The process of heating milk to kill pathogenic microorganisms is called
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans30" >sterilization      </label>&nbsp;&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans30" value="1">pasteurization     </label>&nbsp;&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans30"  >irradiation          </label>&nbsp;&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans30"  >none of the above</label>
                    <hr>
                    31- Freezing kills microorganisms
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans27"  > True </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans27" value="1"  > False </label>

                    <hr>
                    32- HACCP is designed to detect food hazards in a food industry facility.
                    <br><br>

                    <label class="radio-inline"><input type="radio" name="ans32" value="1">True </label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans32" >False</label>

                </div>

                <div class="tab">
                    33-  The two parts of HACCP include
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans33" value="1">hazard analysis and critical control points </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans33"   >health analysis and critical control points</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans33"  >hazard analysis and critical conformation production</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans33"  >  health analysis and critical conformation production</label>


                    <hr>
                   34-  Only manufacturing personnel entering the manufacturing areas need to wear protective garments appropriate to the operations carried out in the area
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans34"  > True </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans34" value="1"  > False </label>
                    <hr>
                    35-  You must wear a hair net in the production room and all other rooms except the offices.
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans35"  > True </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans35" value="1"  > False </label>

                    <hr>
                    36-	You remove jewelry before work because
                    <br><br>

                    <label class="radio-inline"><input type="radio" name="ans36" value="1"> It can fall into the product. </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans36"   >No one likes to wear jewelry.</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans36"  >Wearing jewelry makes processing food harder</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans36"  >  Everyone will ask you about it</label>



                </div>

                <div class="tab">
                    37-	To keep the food safe, you must wear a hair net and if you have facial hair, a beard cover, at all times in the production room.
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans37"   value="1"> True </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans37"  > False </label>

                    <hr>
                    38-  You can chew gum and eat the product when in the production room
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans38"  > True </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans38"  value="1"  > False </label>
                    <hr>
                    39- What does Critical Control Point mean?
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans39" > The point when food handlers must start to make administrative records in the HACCP system.. </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans39"   >The point when steam starts to rise from food being cooked..</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans39"  >When bacteria starts to grow uncontrollably on food</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans39" value="1" > It is a point, step or procedure at which control can be applied to prevent or eliminate a food safety hazard or reduce it to an acceptable level.</label>


                    <hr>
                    40-	What is a HACCP Plan?
                    <br><br>

                    <label class="radio-inline"><input type="radio" name="ans40" > A form that has to be filled in by all food handlers </label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans40"   >A food hygiene rating scheme.</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans40" value="1"  >A written document which is based upon the seven principles of HACCP, which clearly states the safety procedures to be followed to identify any hazards that must be avoided, removed or reduced</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans40"  >  A system used in food hygiene auditing</label>



                </div>

                <div class="tab">
                    41-	What is a HACCP Team?.
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans41" >  A team of highly trained chefs</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans41"   value="1" >A group of people who have the skills and knowledge needed to develop, implement and maintain a HACCP system.</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans41"  >.A team of government investigators</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans41" > An office based team of administrative officials who specialise in food hygiene matters</label>


                    <hr>
                    42-  Which of these would be a critical limit?
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans42" > Washing vegetables before using them.</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans42"   value="1" >Cooking chicken to reach a temperature of 165°F (74°C) for 15 seconds</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans42"  >Checking the use by date on canned ingredients</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans42" > The temperature food is kept at in a fridge</label>

                    <hr>
                    43- What is the first stage of putting together a HACCP system?
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans43" value="1"> Putting together a HACCP team</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans43"   >Making sure everyone has the correct forms that have to be filled in</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans43"  >Determining the product lines and distribution channels that should be included in the HACCP plan.</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans43"  > Creating a flow diagram that gives a simple and clear outline of the steps involved in the food process of the company</label>


                    <hr>
                    44-	What sectors is HACCP applicable to?
                    <br><br>

                    <label class="radio-inline"><input type="radio" name="ans44" >.    The motor industry and specifically the production line</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans44"   >The airline industry</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans44"   >.    Software development</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans44" value="1" > .    It is suitable to be implemented by organisations directly or indirectly involved in various sectors of the food industry and related supply chain.</label>



                </div>

                <div class="tab">
                    45-	How many principles are there in a HACCP system?
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans45" >  Four</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans45"   value="1" >Seven.</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans45"  >Eighteen</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans45" > Ten</label>


                    <hr>
                    46- Which of the following is true about bacteria
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans46" value="1" > Bacteria multiplies and grows faster in warm environments</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans46"    >Bacteria needs air to survive</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans46"  >Every type of bacteria can give people food poisoning</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans46" > .    By freezing food you can kill bacteria</label>

                    <hr>
                    47-What is the purpose of Protective Disposable Clothing?
                    <br><br>
                    <label class="radio-inline"><input type="radio" name="ans43" value="1"> .    It assists the food handler to maintain and upkeep their personal levels of hygiene, thereby helping to stop any food contamination.</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans43"   >.    Makes the food handler look more professional.</label>	&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans43"  >.    It helps food handlers to recognise each other and the work they do..</label>&nbsp;	&nbsp;
                    <label class="radio-inline"><input type="radio" name="ans43"  > .    It protects them in the case of an accident</label>





                </div>

                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>

                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>

                </div>

            </form>
            @endif
        </div>

    </div>
    <!-- /.MultiStep Form -->

<br><br>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>

@endsection