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

            ol {
                list-style: disc;
                padding:0px;
            }

            .last {
                margin-top:10px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body class="antialiased">
        <header>
            <p>Detailed Breakdown</p>
        </header>
        <section>
            <table class="break">
            <tr>
            <td>Patient Name</td>
            <td>Verrific Terrific</td>
        </tr>
            <tr>
            <td>Date of Birth</td>
            <td>01/01/1995</td>
        </tr>
            <tr>
            <td>Insurance Carrier</td>
            <td>Cigna</td>
        </tr>
            <tr>
            <td>Group Num</td>
            <td>0742704</td>
        </tr>
            <tr>
            <td>Effective Date</td>
            <td>1/1/2021 </td>
        </tr>
        </table>
            <table class="break">
            <tr>
            <td>Subscriber Name</td>
            <td>Verrific Subscriber</td>
        </tr>
            <tr>
            <td>Subscriber DOB</td>
            <td>Verrific Subscriber</td>
        </tr>
            <tr>
            <td>Req Participation</td>
            <td>In Network</td>
        </tr>
            <tr>
            <td>Group Name</td>
            <td>ASDF</td>
        </tr>
            <tr>
            <td>Ins Max Used</td>
            <td>$800</td>
        </tr>
        </table>
            <table class="break">
            <tr>
            <td>Subscriber Id</td>
            <td>123456789</td>
        </tr>
            <tr>
            <td>Date Verified</td>
            <td>06/17/2021 16:38:06 GMT</td>
        </tr>
            <tr>
            <td>Verified as</td>
            <td>DPPO</td>
        </tr>
            <tr>
            <td>Deductible Met $50</td>
            <td></td>
        </tr>
        </table>
        </section>
        <section class="break">
            <p class="h1">Subscriber Note/Alert:</p>
            <p>Patient name: Jimin Park</br>
            Has patient history at another provider been checked and entered?: Yes</br>
            Has insurance amount and deductible used been checked and entered?: YES</br>
            Rep Name: Eli</br>
            Reference #: 239458</br>
            No ortho coverage for dependents</p>
        </section>
        <div class="linebreak">
        <section class="break2">
            <p class="h1">Maximums and Deductibles</p>
            <table>
            <tr>
            <td>Benefit Year</td>
            <td>Calendar</td>
        </tr>
            <tr>
            <td>Annual Max</td>
            <td>$1500</td>
        </tr>
            <tr>
            <td>General Deductible</td>
            <td>$50</td>
        </tr>
            <tr>
            <td>Family Deductible</td>
            <td>$150</td>
        </tr>
            <tr>
            <td>Diagnostic Deductible</td>
            <td>$0</td>
        </tr>
            <tr>
            <td>X-ray Deductible</td>
            <td>$0</td>
        </tr>
            <tr>
            <td>X-ray PA Deductible</td>
            <td>$0</td>
        </tr>
            <tr>
            <td>X-ray 4BW Deductible</td>
            <td>$0</td>
        </tr>
            <tr>
            <td>X-ray FMX, Pano Deductible</td>
            <td>$0</td>
        </tr>
            <tr>
            <td>Preventative Deductible</td>
            <td>$0</td>
        </tr>
        </table>
        </section>
        
        <section class="break2">
            <p class="h1">% Coverage for Categories</p>
            <table>
            <tr>
            <td>Diagnostic</td>
            <td>100%</td>
            </tr>
            <tr>
            <td>X-ray</td>
            <td>100%</td>
        </tr>
            <tr>
            <td>Routine Preventive</td>
            <td>100%</td>
        </tr>
            <tr>
            <td>Restorative</td>
            <td>80%</td>
        </tr>
            <tr>
            <td>Endo</td>
            <td>80%</td>
        </tr>
            <tr>
            <td>Perio</td>
            <td>80%</td>
        </tr>
            <tr>
            <td>Oral Surgery</td>
            <td>80%</td>
        </tr>
            <tr>
            <td>Crowns</td>
            <td>50%</td>
        </tr>
            <tr>
            <td>Prosthodontics</td>
            <td>50%</td>
        </tr>
        </table>
        </section>
        </div>
        <div class="linebreak">
        <section class="break2">
            <p class="h1">Waiting period for Categories</p>
            <table>
            <tr>
            <td>Restorative</td>
            <td>0 month(s)</td>
            </tr>
            <tr>
            <td>Endo</td>
            <td>0 month(s)</td>
            </tr>
            <tr>
            <td>Perio</td>
            <td>0 month(s)</td>
        </tr>
            <tr>
            <td>Oral Surgery</td>
            <td>0 month(s)</td>
        </tr>
            <tr>
            <td>Crowns</td>
            <td>0 month(s)</td>
        </tr>
            <tr>
            <td>Prosthodontics </td>
            <td>0 month(s)</td>
        </tr>
        </table>
        </section>
        <section class="break2">
            <p class="h1">Ortho Information</p>
            <table>
                <tr>

            <td>Lifetime Max</td>
            <td>$1000</td>
        </tr>
        <tr>
            <td>Percentage</td>
            <td>50%</td>
        </tr>
        <tr>
            <td>Age limit</td>
            <td>18</td>
        </tr>
        </table>
        </section>
        </div>
        <div class="linebreak">
        <section class="break2">
            <p class="h1">Downgrades</p>
            <table>
                <tr>
            <td>Do Fillings have a downgrade?</td>
            <td>Posterior</td>
        </tr>
            <tr>
            <td>Do Fillings have a downgrade?</td>
            <td>All</td>
        </tr>
        </table>
            <p class="h1">Age Limitations</p>
            <table>
                <tr>
            <td>Fluoride through age</td>
            <td>15</td>
        </tr>
            <tr>
            <td>Sealants through age</td>
            <td>14</td>
        </tr>
        </table>
        </section>
        <section class="break2">
            <p class="h1">Frequencies</p>
            <table>
                <tr>
            <td>Frequency of BW</td>
            <td>1 Per Year</td>
            </tr>
            <tr>
            <td>Frequency of Pano/FMX</td>
            <td>Every 36 Months</td>
        </tr>
            <tr>
            <td>Frequency of Exams</td>
            <td>2 Per Year</td>
        </tr>
            <tr>
            <td>Frequency of Prophy</td>
            <td>2 Per Year</td>
        </tr>
            <tr>
            <td>Frequency of Fluoride</td>
            <td>2 Per Year</td>
        </tr>
            <tr>
            <td>Frequency of Sealants</td>
            <td>Every 36 Months</td>
        </tr>
        <tr>
            <td>Frequency of Crowns</td>
            <td>Every 60 Months</td>
        </tr>
            <tr>
            <td>Frequency of SRP</td>
            <td>Every 24 Months</td>
        </tr>
        <tr>
            <td>Frequency of Full Debridement</td>
            <td>Every 36 Months</td>
        </tr>
        <tr>
            <td>Frequency of Perio Maintenance</td>
            <td>2 Per Year</td>
        </tr>
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
  <tr>
    <td>D1208/D1206 (Fluoride)</td>
    <td>100%</td>
    <td>2 Per Year</td>
    <td>15</td>
  </tr>
  <tr>
  <td>D1351 (Sealants)</td>
    <td>100%</td>
    <td>Every 36 Months</td>
    <td>14</td>
  </tr>
  <tr>
  <td>D1351 (Sealants)</td>
    <td>100%</td>
    <td>Every 36 Months</td>
    <td>14</td>
  </tr>
  <tr>
  <td>D4355 (Debridement)</td>
    <td>80%</td>
    <td>Every 36 Months</td>
    <td></td>
  </tr>
  <tr>
  <td>D4381 (Minocycline gel)</td>
    <td>80%</td>
    <td>Every 99 Years</td>
    <td></td>
  </tr>
  <tr>
  <td>D4910 (Periodontal maintenance)</td>
    <td>80%</td>
    <td>2 Per Year</td>
    <td></td>
  </tr>
  <tr>
  <td>D4266 (Guided Tissue Regeneration)</td>
    <td>80%</td>
    <td>x</td>
    <td></td>
  </tr>
  <tr>
  <td>D7953 (Bone replacement graft for ridge preservation)</td>
    <td>80%</td>
    <td>x</td>
    <td></td>
  </tr>
  <tr>
  <td>D7210 (Surgical Extractions)</td>
    <td>80%</td>
    <td>x</td>
    <td></td>
  </tr>
  <tr>
  <td>D6010 (Surgical placement of implant body)</td>
    <td>No Coverage</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td>D6057 (Custom fabricated abutment)</td>
    <td>No Coverage</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td>D6058 (Abutment supported porcelain/ceramic crown)</td>
    <td>No Coverage</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td>D9110 (Palliative (emergency) treatment of dental pain)</td>
    <td>80%</td>
    <td>x</td>
    <td></td>
  </tr>
  <tr>
  <td>D9944 (Occlusal guard – hard appliance, full arch)</td>
    <td>80%</td>
    <td>x</td>
    <td></td>
  </tr><tr>
  <td>D9945 (Occlusal guard – soft appliance, full arch)</td>
    <td>80%</td>
    <td>x</td>
    <td></td>
  </tr>
  <tr>
  <td>D9946 (Occlusal guard – hard appliance, partial arch)</td>
    <td>80%</td>
    <td>x</td>
    <td></td>
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
                
            <tr>
                <td>Are limited exams included in Exam freq?</td>
                <td>No</td>
        </tr>
        <tr>
            <td>Adult prophy (D1110) is considered at what age?</td>
            <td>13</td>
        </tr>
    <tr>
            <td>Sealants Covered On Which Teeth?</td>
            <td>Molar</td>
        </tr>
    <tr>
            <td>Can all for quads of SRP (D4341/D4342) be done on same day?</td>
            <td>No</td>
        </tr>
    <tr>
            <td>After doing SRP (D4341/D4342), how long for D4381(minocycline gel) to be considered?</td>
            <td>31 day(s)</td>
        </tr>
    <tr>
            <td>After doing SRP (D4341/D4342), how long for D4910 (perio maintenance) to be considered?</td>
            <td>91 day(s)</td>
        </tr>
    <tr>
            <td>Does perio maintenance (D4910) share frequency with prophy (D1110) or in addition to?</td>
            <td>In Addition To</td>
        </tr>
    <tr>
            <td>Will guided tissue regeneration (D4266/D4267) get covered if done on the day of extraction?</td>
            <td>No</td>
        </tr>
    <tr>
            <td>Will bone graft (D7953) get covered if done on the day of extraction?</td>
            <td>No</td>
        </tr>
    <tr>
            <td>Occlusal Guard Coverage</td>
            <td>Bruxism Only</td>
        </tr>
        </table>
            <p class="last">This section can be customized to include 10 custom codes for your practice. Simply provide to us
YOUR 10 custom questions you would like in this section instead. 10 custom questions are included in the cost of the detailed breakdown.
If you would like to add additional codes beyond the 10, please refer to the FAQ titled ‘customization’  on the https://www.verific.biz website for
additional pricing</p>
        </section>
        <section class="break no-color">
            <p class="h1">History</p>
            <table>
                <tr>
                    <th>Sr No.</th>
                    <th>DOS</th>
                    <th>Procedure code(s)</th>
                    <th>Tooth/Quad</th>
                    <th>Surface</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>02/01/2021</td>
                    <td>D0110,D0120,D1110</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>02/21/2021</td>
                    <td>D7140,D7953</td>
                    <td>8</td>
                    <td></td>
                </tr>
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
