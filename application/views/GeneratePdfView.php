
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
        <div class="">
            <div style="margin-bottom: 15px;  ">
                <img src="<?php echo base_url(); ?>assets/dist/images/logo.png" alt="" style="width: 150px;"/>
            </div>
            <div class="title" style="text-align: center;margin-bottom: 15px;">
                <h4 class="bold">TRAVEL INSURANCE CERTIFICATE</h4>
            </div>
            <table style="width: 100%;border-collapse: collapse;font-size: 11px;font-weight: 700;">
                <tr>
                    <td class="bold">
                        POLICY NO : <span>WC- <?php echo $ins_list->policy_no; ?></span>
                    </td>
                    <td class="bold">
                    <p>ISSUE DATE : <span><?php echo date('d/m/Y',strtotime($ins_list->date)); ?></span></p>
                    </td>
                    <td class="bold">
                    <p>PLAN : <span>COVID PLAN </span></p>
                    </td>
                    <td class="bold">
                    <p>AGENT : <span>NATIONAL</span></p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-color">
                    <div class="sub-child-two">
                        <p class="list-title">DESTINATION</p>
                        <p class="list-content"><span class="bold"><?php echo $ins_list->destination; ?></span></p>
                    </div>
                </td>
                    <td class="bg-color">
                    <div class="sub-child-two">
                    <table>
                            <tr>
                            <td><p>From</p>
                                <p class="form-date"><span class="bold"><?php echo date('d/m/Y',strtotime($ins_list->effective_date)). "                 "; ?></span></p></td>
                            <td>
                                <div style="width: 5px;">

                                </div>
                            <div>
                            <p>To</p>
                            <p class="form-date"><span class="bold"><?php echo "    ".date('d/m/Y',strtotime("+1 month", strtotime($ins_list->effective_date))); ?></span></p></td>
                            </div>
                            </tr>
                        </table>  
                    </div>
                    </td>
                    <td class="bg-color">
                    <div class="sub-child-two">
                        <p class="list-title">COUNTRY OF RESIDENCE</p>
                        <p class="list-content"><span class="bold"><?php echo $ins_list->home_country; ?></span></p>
                    </div>
                    </td>
                    <td class="bg-color">
                    <div class="sub-child-two">
                        <p class="list-title">TELEPHONE NO</p>
                        <p class="list-content"><span class="bold"><?php echo $ins_list->phone; ?></span></p>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td class="bg-color">
                    <div class="sub-child-two">
                        <p class="list-title">FULL NAME</p>
                        <p class="list-content"><span class="bold"><?php echo $ins_list->full_name; ?></span></p>
                    </div>
                    </td>
                    <td class="bg-color">
                    <div class="sub-child-two">
                        <p class="list-title">DATE OF BIRTH</p>
                        <p class="list-content"><span class="bold"><?php echo date('d/m/Y',strtotime($ins_list->date_of_birth));?></span></p>
                    </div>
                    </td>
                    <td class="bg-color">
                    <div class="sub-child-two">
                        <p class="list-title">PASSPORT NUMBER</p>
                        <p class="list-content"><span class="bold"><?php echo $ins_list->passport_no; ?></span></p>
                    </div>
                    </td>
                    <td></td>
                    
                </tr>
            </table>
            
            
            <div class="text-one">
                <p>Contrary to any stipulations stated in the General Conditions,the plan subscribed to,under this Letter of Confirmation, covers exclusively the below mentioned Benefits.</p>
                <p>Limitations & Excesses shown in the table hereafter.</p>
                <p>The General Conditions form an integral part of this Letter of Confirmation.</p>
                <p><span class="bold-700">For more info/modification regarding your policy,</span> kindly do not hesitate to contact your authorized agent or e-mail us on enquiry@wecare-center.com</p>
            </div>
            <table class="tb">
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
                <?php echo $image; ?>
                <div class="bar-code">
                    
                </div>
            </div>
            <div class="footer">
                <table>
                    <tr>
                        <td class="bg-color-footer">
                        <div class="">
                                <p>
                                    PLEASE KEEP THIS LETTER OF CONFIRMATION WITH YOU AT ALL TIMES Claims must be reported within 48 hours from occurrence of the event and all related original documents must be submitted to the Company by the
                                    beneficiary within four (4) months maximum.
                                </p>
                        </div>
                        </td>
                        <td class="bg-color-footer">
                        <div class="">
                                <p>
                                    in case of emergency or claims of assistance,call us on: <a href="tel:+919511458978">+91 95 11 45 89 78</a> or <a class="tel:+918756542370">+91 87 56 54 23 70</a> or send e-mail to:
                                    <a href="mailto:claims@wecare-center.com">claims@wecare-center.com</a> You will be asked to provide the reference of this letter and/or show this document. This purchase is non-refundable.Please refer to your
                                    receipt.
                                </p>
                        </div>
                        </td>
                    </tr>
                </table>
                
                
            </div>
        </div>
    </body>
</html>
