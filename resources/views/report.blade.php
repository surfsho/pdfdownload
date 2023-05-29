<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            header {
                color:red;
                font-size:30px;
                text-align:center;
                font-weight:bold;
            }
            body{
                font-family: sans-serif;

            }
            section {
                display:flex;
                width:60vw;
                font-size: 18px;
                margin:50px;
                
            }

            .break {
                display:flex;
                flex-direction:column;
                width:80vw;
            }

            .break2 {
                display:flex;
                flex-direction:column;
                width:36vw;
            }

            .break3 {
                display:flex;
                flex-direction:column;
                width:36vw;
            }

            .break4 {
                display:flex;
                flex-direction:column;
                width:36vw;
            }

            .linebreak {
                display:flex;
                width:80vw;
                justify-content: space-between;
            }
            
            p {
                margin:2px;
            }

            .h1 {
                background-color: red;
                color:white;
            }

            .input {
                display: flex;
            }

            .input > p:nth-child(2) {
                border-bottom:1px solid black;
                width:200px;
            }

            th {
                background-color: red;
                text-align:left;
                margin:0px;
                color:white;
                padding:8px;
                padding-top:10px;
                padding-bottom:10px;
            }

            .break td:nth-child(2), .break td:nth-child(3), .break td:nth-child(4){
                border-bottom: 1px solid black;
            }

            .break2 td:nth-child(2), .break2 td:nth-child(3), .break2 td:nth-child(4){
                border-bottom: 1px solid black;
            }

            .break3 td:nth-child(2), .break3 td:nth-child(3), .break3 td:nth-child(4){
                border-bottom: 1px solid black;
            }


            .break4 td:nth-child(2), .break4 td:nth-child(3), .break4 td:nth-child(4){
                border-bottom: 1px solid black;
            }


            .no-color th {
                background-color:white;
                color:black;
            }

            .no-color td {
                border:none !important;
            }

            .break > .h1 {
                font-weight:bold;
                padding:8px;
                padding-top:10px;
                padding-bottom:10px;
            }

            .break2 > .h1 {
                font-weight:bold;
                padding:8px;
                padding-top:10px;
                padding-bottom:10px;
            }

            .break3 > .h1 {
                font-weight:bold;
                padding:8px;
                padding-top:10px;
                padding-bottom:10px;
            }

            .break4 > .h1 {
                font-weight:bold;
                padding:8px;
                padding-top:10px;
                padding-bottom:10px;
            }

            ol {
                list-style: disc;
                padding:0px;
            }

            .last {
                margin-top:10px;
                margin-bottom: 10px;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
     

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
        
       <script>
            

            function download() {
                let doc = new jsPDF('p', 'px', "a0",[1500, 1500]);
                doc.addHTML(document.body, 15,15, {pagesplit:true,margin:{top:50, useFor:"page"},useFor:"page"}, function () {
                    doc.save('testpoc.pdf');
                });

            }
            // (async function() {
            //    let request =  await fetch("/api");
            //    let json = await request.json();
            //    console.log(json);
            //    let namestring = `<tr><td>patientname</td><td>${json.patient.name}</td></tr>
            //    <tr><td>dob</td><td>${json.patient.dob}<td></tr>
            //    <tr><td>member id</td><td>${json.patient.member_id}<td></tr>
            //    <tr><td>effective date</td><td>${json.patient.coverage.effective_date}<td></tr>
            //    <tr><td>status</td><td>${json.patient.coverage.status}<td></tr>
            //    `
            //    $(".break:nth-child(1)").append(namestring);

            //    let name2string = `<tr><td>subscribername</td><td>${json.subscriber.name}</td></tr>
            //    <tr><td>dob</td><td>${json.subscriber.dob}<td></tr>
            //    <tr><td>member id</td><td>${json.subscriber.member_id}<td></tr>
            //    <tr><td>effective date</td><td>${json.subscriber.coverage.effective_date}<td></tr>
            //    <tr><td>status</td><td>${json.subscriber.coverage.status}<td></tr>`
            //    $(".break:nth-child(2)").append(name2string);
            //    let repot2string = `<tr><td>planname</td><td>${json.plan.name}</td></tr>
            //    <tr><td>number</td><td>${json.plan.number}<td></tr>
            //    <tr><td>type</td><td>${json.plan.type}<td></tr>
            //    <tr><td>group number</td><td>${json.plan.group_number}<td></tr>
            //    <tr><td>state</td><td>${json.plan.state}<td></tr>`
            //    $(".break:nth-child(3)").append(repot2string);

            //     let max2string = `<tr><td>${json.deductible[0].category}</td><td>${json.deductible[0].amount}</td></tr>
            //    <tr><td>${json.deductible[1].category}</td><td>${json.deductible[1].amount}<td></tr>
            //    <tr><td>${json.deductible[2].category}</td><td>${json.deductible[2].amount}<td></tr>
            //    <tr><td>${json.deductible[3].category}</td><td>${json.deductible[3].amount}<td></tr>
            //    <tr><td>${json.deductible[4].category}</td><td>${json.deductible[4].amount}<td></tr>`
            //    $(".break2:nth-child(1) > table").append(max2string);
            //    let max3string = `<tr><td>${json.deductible[0].category}</td><td>${json.coinsurance[0].percent}</td></tr>
            //    <tr><td>${json.coinsurance[1].category}</td><td>${json.coinsurance[1].percent}<td></tr>
            //    <tr><td>${json.coinsurance[2].category}</td><td>${json.coinsurance[2].percent}<td></tr>
            //    <tr><td>${json.coinsurance[3].category}</td><td>${json.coinsurance[3].percent}<td></tr>
            //    <tr><td>${json.coinsurance[4].category}</td><td>${json.coinsurance[4].percent}<td></tr>`
            //    let max4string = "";
            //    for(let i of json.limitations) {
            //         max4string = max4string + `<tr><td>${i.service_type}</td><td>${i.limitation}</td></tr>`
            //    }
            //    $(".break4:nth-child(1) > table").append(max4string);
            //    let max5string = "";
            //    for(let i of json.limitations) {
            //         if(i.disclaimers) {
            //         for(let j of i.disclaimers) {
            //             max5string = max5string + `<tr><td>${j}</td><td>${i.category}</td></tr>`
               
            //         }
            //     }
            //     }
            //     $(".break4:nth-child(2) > table").append(max5string);
            //     let max6string = "";
            //    for(let i of json.limitations) {
            //         max6string = max6string + `<tr><td>${i.category}</td><td>${i.limitation}</td></tr>`
            //     }
            //     $(".break3:nth-child(1) > table:nth-of-type(1)").append(max6string);
            //     let max7string = "";
            //    for(let i of json.limitations) {
            //         if(i.service_dates) {
            //         for(let j of i.service_dates) {
            //             max7string = max7string + `<tr><td>${j.procedure_code}</td><td>${j.service_date}</td></tr>`
            //         }
            //     }
            //     }
            //     $(".break3:nth-child(2) > table:nth-of-type(1)").append(max7string);
            //     let max8string = "";
            //    for(let i of json.limitations) {
            //         if(i.service_dates) {
            //         for(let j of i.service_dates) {
            //             max8string = max8string + `<tr><td>${j.service_date}</td><td>${i.limitation}</td></tr>`
            //         }
            //     }
            //     }
            //     $(".break3:nth-child(1) > table:nth-of-type(2)").append(max8string);
            //     let max9string = "";
            //    for(let i of json.limitations) {
            //         if(i.service_dates) {
            //         let k = 0;
            //         for(let j of i.service_dates) {
            //             max9string = max9string + `<tr><td>${j.procedure_code}</td><td>${json.coinsurance[k].percent}</td><td>${i.limitation}</td><td>${j.service_date}</td></tr>`
            //             k = k+1;
            //         }
            //     }
            //     }
            //     $(".break:nth-of-type(3) > table").append(max9string);
            //    $(".break2:nth-child(2) > table").append(max3string);
            
            // })()
        </script>
        </head>
        <body class="antialiased">
        <header>
            <p>Detailed Breakdown</p>
            <button onclick="download()">Save as pdf</button>
        </header>
        <section>
            <table class="break">
            <tr>
            <td>Patient Name</td>
            <td data-name="patientname">{{ $data["DemographicInfo"]["Subscriber"]["FullName"] }}</td>
        </tr>
            <tr>
            <td>Date of Birth</td>
            <td data-name="patientdob">{{ $data["DemographicInfo"]["Subscriber"]["DOB_R"] }}</td>
        </tr>
            <tr>
            <td>Insurance Carrier</td>
            <td data-name="patientinsurancecarrier">{{ $data["PayerName"]}}</td>
        </tr>
            <tr>
            <td>Group Num</td>
            <td data-name="groupnum">{{ $data["PlanCoverageSummary"]["GroupNumber"]}}</td>
        </tr>
            <tr>
            <td>Effective Date</td>
            <td data-name="effectivedate">{{ $data["PlanCoverageSummary"]["EffectiveDate"]}}</td>
        </tr>
            </table>
            <table class="break">
            <tr>
            <td>Subscriber Name</td>
            <td data-name="subscribername">Verrific Subscriber</td>
        </tr>
            <tr>
            <td>Subscriber DOB</td>
            <td data-name="dob">Verrific Subscriber</td>
        </tr>
            <tr>
            <td>Req Participation</td>
            <td data-name="req">In Network</td>
        </tr>
            <tr>
            <td>Group Name</td>
            <td data-name="asdf">ASDF</td>
        </tr>
            <tr>
            <td>Ins Max Used</td>
            <td data-name="insmax">$800</td>
        </tr>
            </table>
            <table class="break">
            </table>
        </section>
        <section class="break1">
        </section>
        <div class="linebreak">
        <section class="break2">
            <p class="h1">Maximums and Deductibles</p>
            <table>
            <tr>
            <td>IndividualDeductibleInNet</td>
            <td>{{ $data["HBPC_Deductible_OOP_Summary"]["IndividualDeductibleInNet"] }}</td>
        </tr>
            <tr>
            <td>IndividualDeductibleOutNet</td>
            <td data-name="max">{{ $data["HBPC_Deductible_OOP_Summary"]["IndividualDeductibleOutNet"] }}</td>
        </tr>
            <tr>
            <td>IndividualDeductibleRemainingInNet</td>
            <td data-name="general">{{ $data["HBPC_Deductible_OOP_Summary"]["IndividualDeductibleRemainingInNet"] }}</td>
        </tr>
            <tr>
            <td>IndividualDeductibleRemainingOutNet</td>
            <td data-name="family">{{ $data["HBPC_Deductible_OOP_Summary"]["IndividualDeductibleRemainingOutNet"] }}</td>
        </tr>
            <tr>
            <td>FamilyDeductibleInNet</td>
            <td data-name="diagnostic">{{ $data["HBPC_Deductible_OOP_Summary"]["FamilyDeductibleInNet"] }}</td>
        </tr>
            <tr>
            <td>FamilyDeductibleOutNet</td>
            <td data-name="x-ray">{{ $data["HBPC_Deductible_OOP_Summary"]["FamilyDeductibleOutNet"] }}</td>
        </tr>
            <tr>
            <td>FamilyDeductibleRemainingInNet</td>
            <td data-name="x-pa">{{ $data["HBPC_Deductible_OOP_Summary"]["FamilyDeductibleRemainingInNet"] }}</td>
        </tr>
            <tr>
            <td>FamilyDeductibleRemainingOutNet</td>
            <td data-name="x-4bw">{{ $data["HBPC_Deductible_OOP_Summary"]["FamilyDeductibleRemainingOutNet"] }}</td>
        </tr>
            <tr>
            <td>IndividualOOP_InNet</td>
            <td data-name="x-mx">{{ $data["HBPC_Deductible_OOP_Summary"]["IndividualOOP_InNet"] }}</td>
        </tr>
            <tr>
            <td>IndividualOOP_OutNet</td>
            <td data-name="preventative">{{ $data["HBPC_Deductible_OOP_Summary"]["IndividualOOP_OutNet"] }}</td>
        </tr>
        <tr>
            <td>IndividualOOPRemainingInNet</td>
            <td data-name="preventative">{{ $data["HBPC_Deductible_OOP_Summary"]["IndividualOOPRemainingInNet"] }}</td>
        </tr>
        <tr>
            <td>IndividualOOPRemainingOutNet</td>
            <td data-name="preventative">{{ $data["HBPC_Deductible_OOP_Summary"]["IndividualOOPRemainingOutNet"] }}</td>
        </tr>
        <tr>
            <td>FamilyOOPInNet</td>
            <td data-name="preventative">{{ $data["HBPC_Deductible_OOP_Summary"]["FamilyOOPInNet"] }}</td>
        </tr>
        <tr>
            <td>FamilyOOPOutNet</td>
            <td data-name="preventative">{{ $data["HBPC_Deductible_OOP_Summary"]["FamilyOOPOutNet"] }}</td>
        </tr>
        <tr>
            <td>FamilyOOPRemainingInNet</td>
            <td data-name="preventative">{{ $data["HBPC_Deductible_OOP_Summary"]["FamilyOOPRemainingInNet"] }}</td>
        </tr>
        <tr>
            <td>FamilyOOPRemainingOutNet</td>
            <td data-name="preventative">{{ $data["HBPC_Deductible_OOP_Summary"]["FamilyOOPRemainingOutNet"] }}</td>
        </tr>
            </table>
        </section>
        <section class="break2">
            <p class="h1">% Coverage for Categories</p>
            <table>
            </table>
        </section>
        </div>
        <div class="linebreak">
        <section class="break4">
            <p class="h1">Waiting period for Categories</p>
            <table>
            </table>
        </section>
        <section class="break4">
            <p class="h1">Ortho Information</p>
            <table>
            </table>
        </section>
        </div>
        <div class="linebreak">
        <section class="break3">
            <p class="h1">Downgrades</p>
            <table>
            </table>
            <p class="h1">Age Limitations</p>
            <table>
        </table>
        </section>
        <section class="break3">
            <p class="h1">Frequencies</p>
            <table>
            </table>
        </section>
        </div>

        <section class="break">
        <table>
  <tr>
    <th>Code Specific Percentage Breakdown & Frequency</th>
    <th>Percent</th>
    <th>Freq</th>
    <th>Age</th>
  </tr>
        </table>
        <p class="last">This section can be customized to include 15 custom codes for your practice. Simply provide to us YOUR 15 codes you would
like in this section instead. 15 custom codes are includeded in the cost of the detailed breakdown. If you would like to add
additional codes beyond 15, please refer to the FAQ titled ‘customization’ on the https://www.Verrific.biz website for additional
pricing</p>
</section>
        <section class="break">
            <p class="h1">Caveat Question</p>
            <table>
            </table>
            <p class="last">This section can be customized to include 10 custom codes for your practice. Simply provide to us
YOUR 10 custom questions you would like in this section instead. 10 custom questions are included in the cost of the detailed breakdown.
If you would like to add additional codes beyond the 10, please refer to the FAQ titled ‘customization’  on the https://www.verific.biz website for
additional pricing</p>
        </section>
        <section class="break no-color">
            <p class="h1">History</p>
            <table>
            </table>
        <p>Customization Note:</p>
        <ol>
        <li>If your remove Fluoride, Sealants, Debridement, Perio Maintenance from Page 2 it will also be removed from Page 1</li>
        <li>If you remove Occulsal Guard Coverage, it will also remove D9944, D9945, D9946</li>
        <li>If you remove D7953 or D4266, it's related caveat question will also be removed</li>
        </ol>
        </section>
        </body>
</html>
