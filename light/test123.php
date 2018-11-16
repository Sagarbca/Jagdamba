<?php ?>
<div id="demo" ng-controller="MainController">

    <h1>Employee Payslip</h1>
    <div class="alert alert-success col-md-3" style="margin-left: -14px;" role="alert">
        <!-- ui-sref="payslip({emp_id:current_emp.emp_payslip})" -->
        <p style="font-weight:bolder;" ng-click="custom=!custom">
            <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Generate New Payslip</p>
    </div>
      <!-- <button type="button" class="btn btn-primary pull-right" ui-sref="welcomepage" name="button">Employee List</button> -->
      <input type="button" class="btn btn-primary pull-right" ui-sref="welcomepage" name="Employee List" value="Employee List">
    <div style="padding-top: 75px;" ng-show="custom">
        <div class="table-responsive-vertical shadow-z-1">
            <!-- Table starts here -->
            <form role="form" name="salaryForm" novalidate>
                <div class="row" style="background-color: white;">
                    <div class="form-group col-md-3">
                        <br>
                        <!-- <label for="email">Select Currency</label>
                        <input type="text" name="name" value="">
                        -->
                        <label for="email">Total Salary</label>
                        <input type="number" ng-model="salary.salary_total" name="total_salary" class="form-control" id="email" required>
                        <br>
                        <div ng-messages="salaryForm.$submitted && salaryForm.total_salary.$error" role="alert">
                            <div ng-message="required" class="alert alert-danger"> Enter Total Salary</div>
                        </div>
                        <label for="email">Notes</label>
                        <textarea class="form-control" ng-model="notes" style="margin: 0px; width: 413px; height: 68px;"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <br>
                        <label for="email">Select Month</label>
                        <p class="input-group">
                            <input type="text" class="form-control" uib-datepicker-popup="{{format}}" ng-model="dt" is-open="popup1.opened" datepicker-options="{minMode: 'month'}" datepicker-mode="'month'" ng-required="true" close-text="Close" alt-input-formats="altInputFormats"
                            />
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-default" ng-click="open1()"><i class="glyphicon glyphicon-calendar"></i></button>
                            </p>
                          </span>
                    </div>
                    <div class="form-group col-md-2">
                        <br>
                        <label for="email">Select Currency</label>
                        <select name="singleSelect" class="form-control" ng-model="selectedcurrency">
                            <option ng-repeat="currency in currencies" value="{{currency.symbol}}">{{currency.name}}</option>
                        </select>
                        <br>
                    </div>
                    <div class="form-group col-md-3">
                        <br>
                        <br>
                        <button type="button" class="btn btn-default" style="margin-top: 5px;padding: 7px 18px;" ng-click="calculateSalary(salaryForm);">Submit</button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-default" style="margin-top: 5px;padding: 7px 26px;" ng-show="deduction" ng-click="saveCalculatedSalary();">Save</button>
                        &nbsp
                        <button type="button" class="btn btn-default" style="margin-top: 5px;padding: 7px;" ng-show="created" ng-click="printthis()">Save as PDF</button>
                        <!-- <button type="submit" class="btn btn-default" ng-show="deduction" ng-click="printthis()">Save as PDF</button> -->
                    </div>
                </div>
            </form>

        </div>
    </div>
    <br>
    <br>
    <br>
    <div style="padding-top: 25px;margin-left: -15px;" ng-hide="custom">
        <!-- Responsive table starts here -->
        <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
        <div class="table-responsive-vertical shadow-z-1">
            <!-- Table starts here -->
            <table id="table" class="table table-hover table-mc-light-blue">
                <thead>
                    <tr>

                        <th>Name</th>
                        <th>Month</th>
                        <th>Total Salary</th>
                        <th>Preview</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="emp in empPayslip">
                        <td data-title="Name" style=" text-transform: capitalize;">{{emp.salary_record_empname}}</td>
                        <td data-title="Month" style=" text-transform: capitalize;"> {{emp.salary_record_month | date:'MMMM'}} </td>
                        <td data-title="Total Salary">{{emp.salary_record_totalsalary}}</td>
                        <td data-title="DOWNLOAD"><a href="" ng-click="printpdf(emp);toggleCustom()">PREVIEW<a></td>
                          <td>
                              <i class="glyphicon glyphicon-trash" style="cursor:pointer" ng-click="deleteemployeepayslip(emp,$index)"></i>
                          </td>
                          <td data-title="DOWNLOAD"><a href="" ng-hide="cust1" ng-click="printthis()">DOWNLOAD<a></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- ng-show="deduction" -->

    <div id="printthis" ng-show="deduction" ng-hide="cust1" style="background-color: white; margin-left: -16px; margin-right: -15px;">
        <style type="text/css">
            .tg {
                border-collapse: collapse;
                border-spacing: 0;
                border-color: #ccc;
            }
            .tg td {
                font-family: Arial, sans-serif;
                font-size: 14px;
                padding: 10px 5px;
                border-style: solid;
                border-width: 1px;
                overflow: hidden;
                word-break: normal;
                border-color: #ccc;
                color: #333;
                background-color: #fff;
            }
            .tg th {
                font-family: Arial, sans-serif;
                font-size: 14px;
                font-weight: normal;
                padding: 10px 5px;
                border-style: solid;
                border-width: 1px;
                overflow: hidden;
                word-break: normal;
                border-color: #ccc;
                color: #333;
                background-color: #f0f0f0;
            }
            .tg .tg-y2tu {
                font-weight: bold;
                text-decoration: underline;
                vertical-align: top;
            }
            .tg .tg-e3zv {
                font-weight: bold;
            }
            .tg .tg-cmw5 {
                font-size: 12px;
                font-family: "Lucida Console", Monaco, monospace !important;
            }
            .tg .tg-yw4l {
                vertical-align: top;
            }
            .tg .tg-9hbo {
                font-weight: bold;
                vertical-align: top;
            }
            @media screen and (max-width: 767px) {
                .tg {
                    width: auto !important;
                }
                .tg col {
                    width: auto !important;
                }
                .tg-wrap {
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                }
            }
        </style>
        <div class="">

        </div>

        <div class="tg-wrap" style="padding-left:146px">
            <div class="row">
                <div class="col-md-6">
                    <img style="height: 100px; width: 100px; margin-left: -141px; margin-top: 14px;" src="/ft.png" alt="" />
                </div>
                <div class="col-md-6">
                    <b>
                  <p style="text-align: right; padding-right: 15px; padding-top: 14px;">
                  FOUNTAIN TECHNOLOGIES
                  <br> SKY ONE 1ST FLOOR,
                  <br> OPP GOLD ADLABS,
                  <br> CLOVER WATER GARDEN,
                  <br> KALYANI NAGAR,
                  <br>PUNE, 411006
                  </p>
                  </b>
                </div>
            </div>
            <h1>
                <center style="text-decoration: underline;padding-right: 220px; font-weight: bold;">SALARY SLIP</center>
            </h1>
            <div class="" style="margin-left: -9pc; border: 1px solid black; font-weight: bold; padding: 15px 5px;">
                <div class="row">
                    <br>
                    <div class="col-md-3" style=" font-weight: bold;">
                        &nbsp NAME
                    </div>
                    <div class="col-md-3" style=" font-weight: bold;text-transform: uppercase">
                        {{current_employee.emp_name}}
                    </div>
                    <div class="col-md-3" style="font-weight: bold;text-align: right;">
                        &nbsp DATE
                    </div>
                    <div class="col-md-3" style=" font-weight: bold;text-transform: uppercase;text-align: right;padding-right: 21px;">
                        {{dt | date}}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3" style=" font-weight: bold;">
                        &nbsp DESIGNATION
                    </div>
                    <div class="col-md-3" style=" font-weight: bold;text-transform: uppercase">
                        {{current_employee.emp_designation}}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3" style=" font-weight: bold;">
                          &nbsp DEPARTMENT
                    </div>
                    <div class="col-md-3" style=" font-weight: bold;text-transform: uppercase">
                        {{current_employee.emp_department}}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3" style=" font-weight: bold;text-transform: uppercase">
                        &nbsp DATE OF JOINING
                    </div>
                    <div class="col-md-3" style=" font-weight: bold;text-transform: uppercase">
                        {{current_employee.emp_doj | date}}
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-2" style=" font-weight: bold;">
                    </div>
                    &nbsp &nbsp
                    <div class="col-md-3" style=" font-weight: bolder;text-decoration: underline;font-size: 18px;">
                        EARNINGS
                    </div>
                    <div class="col-md-2" style=" font-weight: bold;">
                    </div>
                    &nbsp
                    <div class="col-md-3" style=" font-weight: bolder;text-decoration: underline;font-size: 18px;">
                        DEDUCTIONS
                    </div>
                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black; font-weight: bold; padding: 15px 5px;background-color: grey;">
                    SALARY HEAD
                </div>
                <div class="col-md-3" style="border: 1px solid black; font-weight: bold; padding: 15px 5px;text-align: right;background-color: grey;">
                    AMOUNT ({{selectedcurrency}})
                </div>
                <div class="col-md-3" style="border: 1px solid black; font-weight: bold; padding: 15px 5px;background-color: grey;">
                    SALARY HEAD
                </div>
                <div class="col-md-3" style="border: 1px solid black; font-weight: bold; padding: 15px 5px;text-align: right;background-color: grey;">
                    AMOUNT ({{selectedcurrency}})
                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    Basic
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;    text-align: right;">
                    {{new_salary.salary_record_basic}} &nbsp {{selectedcurrency}}
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    PF Employee
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;    text-align: right;">
                    {{new_salary.salary_record_pf}}  &nbsp {{selectedcurrency}}
                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    H R A
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;    text-align: right;">
                    {{new_salary.salary_record_hr}}  &nbsp {{selectedcurrency}}
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    Education Cess
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;    text-align: right;">
                    {{new_salary.salary_record_edu}}  &nbsp {{selectedcurrency}}
                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    Conv. ALL
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;    text-align: right;">
                    {{new_salary.salary_record_conv}}  &nbsp {{selectedcurrency}}
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    Income Tax
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;    text-align: right;">
                    {{new_salary.salary_record_incometax}}  &nbsp {{selectedcurrency}}
                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    Medical Allowance
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;    text-align: right;">
                    {{new_salary.salary_record_medical}}  &nbsp {{selectedcurrency}}
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    Professional Tax
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;    text-align: right;">
                    {{new_salary.salary_record_pt}}  &nbsp {{selectedcurrency}}
                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    Personal Allowance
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;    text-align: right;">
                    {{new_salary.salary_record_personal}}  &nbsp {{selectedcurrency}}
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">
                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    Phone & Internet
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;    text-align: right;">
                    {{new_salary.salary_record_phone}}  &nbsp {{selectedcurrency}}
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">

                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="padding: 10px 5px;">

                </div>
                <div class="col-md-3" style="padding: 10px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">

                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">

                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black; font-weight: bold;  padding: 10px 5px;">
                    SALARY (GROSS) / PM
                </div>
                <div class="col-md-3" style="border: 1px solid black; font-weight: bold; padding: 10px 5px;    text-align: right;">
                      {{ new_salary.salary_record_gross }}  &nbsp {{selectedcurrency}}
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">

                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">

                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    ESI Employer
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">
                    -
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">

                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    Exgratia
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">
                    -
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">

                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    Medical (Reimb)
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">
                    -
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    Conv (Reimb)
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">
                    -
                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    Telephone (Reimb)
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">
                    -
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">

                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;font-weight: bold;">
                    Others (Reimb)
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 10px 5px;">
                    -
                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">

                </div>
                <div class="col-md-3" style="border: 1px solid black;  padding: 20px 5px;">

                </div>
            </div>
            <div class="row" style="margin-left: -9pc; margin-right: 0px;">
                <div class="col-md-3" style="border: 1px solid black; font-weight: bold; padding: 10px 5px;font-weight: bold;">
                    SALARY (CTC) / PM
                </div>
                <div class="col-md-3" style="border: 1px solid black; font-weight: bold; padding: 10px 5px;font-weight: bold;    text-align: right;">
                    {{new_salary.salary_record_gross}}  &nbsp {{selectedcurrency}}
                </div>
                <div class="col-md-3" style="border: 1px solid black; font-weight: bold; padding: 10px 5px;font-weight: bold;">
                    TOTAL DEDUCTION
                </div>
                <div class="col-md-3" style="border: 1px solid black; font-weight: bold; padding: 10px 5px;font-weight: bold;    text-align: right;">
                    {{deduction}}  &nbsp {{selectedcurrency}}
                </div>
            </div>
            <div class="" style="margin-left: -9pc; border: 1px solid black; font-weight: bold; padding: 15px 5px;">
                <div class="row">
                    <br>
                    <div class="col-md-3" style=" font-weight: bold;">
                        Cash in Hand (PM)
                    </div>
                    <div class="col-md-3" style=" font-weight: bold;">

                    </div>
                    <div class="col-md-3" style=" font-weight: bold;">
                        {{new_salary.salary_record_gross}}  &nbsp {{selectedcurrency}}
                    </div>
                    <div class="col-md-3" style=" font-weight: bold;">

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3" style=" font-weight: bold;">
                        SALARY (CTC) / PA
                    </div>
                    <div class="col-md-3" style=" font-weight: bold;">

                    </div>
                    <div class="col-md-3" style=" font-weight: bold;">
                        {{cash_in_hand * 12}}  &nbsp {{selectedcurrency}}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3" style=" font-weight: bold;">

                    </div>
                    <div class="col-md-3" style=" font-weight: bold;">

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3" style=" font-weight: bold;">
                        Notes:
                    </div>
                    <div class="col-md-3" style=" font-weight: bold;">
                        {{notes}}
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-2" style=" font-weight: bold;">
                    </div>
                    <div class="col-md-3" style=" font-weight: bold;  text-decoration: underline;">

                    </div>
                    <div class="col-md-2" style=" font-weight: bold;">
                    </div>
                    <div class="col-md-3" style=" font-weight: bold;  text-decoration: underline;">

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>