<!-- <!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Create PDF from View in CodeIgniter Example</title>
    <link href="<?php echo base_url(); ?>assets/dist/frontend/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>
<body>
<img src="<?php echo base_url(); ?>assets/dist/images/logo.png" alt="" >
<h1 class="text-center bg-info">Generate PDF from View using DomPDF</h1>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Book Name</th>
            <th>Author</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>PHP and MySQL for Dynamic Web Sites</td>
            <td>Larry Ullman</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Pro MEAN Stack Development</td>
            <td>Elad Elrom</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Restful API Design</td>
            <td>Matthias Biehl</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Pro PHP MVC</td>
            <td>Chris Pitt</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Mastering Spring MVC 4</td>
            <td>Geoffroy Warin</td>
        </tr>
        <tbody>
</table>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/frontend/style.css" />
    </head>

    <body>
        <div class="container">
            <div class="logo" style="margin-bottom: 15px;">
                <img src="<?php echo base_url(); ?>assets/dist/images/logo.png" alt="" style="width: 150px;"/>
            </div>
            <div class="title" style="text-align: center;margin-bottom: 15px;">
                <h4>TRAVEL INSURANCE CERTIFICATE</h4>
            </div>
            
            <div class="parent" style="display: flex;flex-wrap: wrap;gap: 10px;">
                <div class="child" style="flex: 1 0 21%;font: 12px;">
                    <div class="sub-child-one">
                        <p>POLICY NO : <span>WC-152496</span></p>
                    </div>
                    <div class="sub-child-two">
                        <p class="list-title">DESTINATION</p>
                        <p class="list-content">SULTANATE OF OMAN</p>
                    </div>
                </div>
                <div class="child">
                    <div class="sub-child-one">
                        <p>ISSUE DATE : <span>09/11/2022</span></p>
                    </div>
                    <div class="sub-child-two">
                        <div class="form">
                            <div>
                                <p>From</p>
                                <p class="form-date">26/10/2022</p>
                            </div>
                            <div>
                                <p>To</p>
                                <p class="form-date">26/11/2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="child">
                    <div class="sub-child-one">
                        <p>PLAN : <span>COVID PLAN (OMAN)</span></p>
                    </div>
                    <div class="sub-child-two">
                        <p class="list-title">COUNTRY OF RESIDENCE</p>
                        <p class="list-content">BANGLADESH</p>
                    </div>
                </div>
                <div class="child">
                    <div class="sub-child-one">
                        <p>AGENT : <span>NATIONAL</span></p>
                    </div>
                    <div class="sub-child-two">
                        <p class="list-title">TELEPHONE NO</p>
                        <p class="list-content">+966567795308</p>
                    </div>
                </div>
                <div class="child">
                    <div class="sub-child-two">
                        <p class="list-title">FULL NAME</p>
                        <p class="list-content">Nadimul Haque Sajib</p>
                    </div>
                </div>
                <div class="child">
                    <div class="sub-child-two">
                        <p class="list-title">DATE OF BIRTH</p>
                        <p class="list-content">04/12/1990</p>
                    </div>
                </div>
                <div class="child">
                    <div class="sub-child-two">
                        <p class="list-title">PASSPORT NUMBER</p>
                        <p class="list-content">EK0359008</p>
                    </div>
                </div>
            </div>
            <div class="text-one">
                <p>Contrary to any stipulations stated in the General Conditions,the plan subscribed to,under this Letter of Confirmation, covers exclusively the below mentioned Benefits.</p>
                <p>Limitations & Excesses shown in the table hereafter.</p>
                <p>The General Conditions form an integral part of this Letter of Confirmation.</p>
                <p><span class="bold-700">For more info/modification regarding your policy,</span> kindly do not hesitate to contact your authorized agent or e-mail us on enquiry@wecare-center.com</p>
            </div>
            <table>
                <tr>
                    <td>BENEFITS</td>
                    <td>SUM INSURED</td>
                    <td>EXCESS</td>
                </tr>
                <tr>
                    <td>Emergency Medical expenses due to COVID-19</td>
                    <td>Up to $100 Per Day Max 14 Days</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Quarantine expenses due to COVID-19</td>
                    <td>Up to $100 Per Day Max 14 Days</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Emergency Medical Evacuation & Repatriation due to COVID</td>
                    <td>Up to $10 000*</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Repatriation of Mortal remains</td>
                    <td>Real Cost</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Emergency Dental Coverage</td>
                    <td>Up to $ 100</td>
                    <td>$ 30</td>
                </tr>
                <tr>
                    <td>Flight Cancelation</td>
                    <td>Up to $ 50</td>
                    <td>6 Hours</td>
                </tr>
                <tr>
                    <td>Loss Of baggage</td>
                    <td>Up to $ 100</td>
                    <td>$ 25</td>
                </tr>
                <tr>
                    <td>Delay Of baggage</td>
                    <td>Up to $ 50</td>
                    <td>12 Hours</td>
                </tr>
                <tr>
                    <td>Loss Of Passport</td>
                    <td>Up to $ 100</td>
                    <td>0</td>
                </tr>
            </table>
            <div class="text-one">
                <p style="color: #000;">Above sums insured are per person & per period of cover</p>
            </div>
            <div class="text-one">
                <p style="color: #000; font-size: 10px;">
                    <u><strong>Important Notice</strong></u>
                </p>
            </div>
            <div class="text-one text-one-black">
                <p>
                    -Upon calling the Alarm Center and claim being processed on direct billing procedure, no deductible shall apply for insured up to 70 years old In all cases,deductible shall apply for Insured above 70 years old Deductible
                    shall be maintained for all insured
                </p>
                <p>Deductible shall be maintained for all insured bracket of age if claims are accepted and processed on reimbursement basis.</p>
                <p>(Please refer to the General Conditions for all deductiable details)</p>
                <p>In case claim is accepted on reimbursement,please refer to the General Conditions</p>
                <p>-This policy is specially designed to cover Covid-19 related expenses only.(Please carefully read the general conditions)</p>
                <p>Coverage in the USA, Canada, Japan & Australia for Emergency Medical Expenses and Evacuation & Repatriation due to Covid-19 is limited to US $ 20,000 per benefit.</p>
            </div>
            <div class="text-one">
                <p style="color: #000; font-size: 10px;">
                    <u><strong>Confirmation Code</strong></u>
                </p>
                <div class="bar-code">
                    <?php echo $image; ?>
                </div>
            </div>
            <div class="footer">
                <div class="footer-one">
                    <p>
                        PLEASE KEEP THIS LETTER OF CONFIRMATION WITH YOU AT ALL TIMES Claims must be reported within 48 hours from occurrence of the event and all related original documents must be submitted to the Company by the
                        beneficiary within four (4) months maximum.
                    </p>
                </div>
                <div class="footer-two">
                    <p>
                        in case of emergency or claims of assistance,call us on: <a href="tel:+919511458978">+91 95 11 45 89 78</a> or <a class="tel:+918756542370">+91 87 56 54 23 70</a> or send e-mail to:
                        <a href="mailto:claims@wecare-center.com">claims@wecare-center.com</a> You will be asked to provide the reference of this letter and/or show this document. This purchase is non-refundable.Please refer to your
                        receipt.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
