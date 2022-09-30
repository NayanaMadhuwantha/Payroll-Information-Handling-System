@extends('layouts.app')

@section('content')
<div id="app_salary_cal">
    <main class="tg-main tg-haslayout">

        <div class="container">
            <div class="row">

                <div id="tg-twocolumns" class="tg-twocolumns">
                    <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-sectionhead">
                                <div class="tg-title">
                                    <h2>Salary Calculator</h2>
                                </div>
                                <div class="tg-description">
                                    <p><b>Calculate EPF and ETF easily be providing details related to your salary.</b> </p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 col-xl-6">
                                    <div class="calc-form">

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="sectionSpace col-md-6">
                                                    <label for="salary">Basic Salary</label>
                                                    <input type="text" class="form-control" id="salary"
                                                           v-model="$v.basicSalaryTemp.$model"
                                                           :class="status($v.basicSalaryTemp)"
                                                           v-on:keyup="onBlurNumber">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="allowances">Allowances</label>
                                                    <input type="text" class="form-control" id="allowances"
                                                           v-model="allowancesTemp"
                                                           v-on:keyup="onBlurNumberAllow">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="sectionSpace col-md-6">
                                                    <label for="salaryAdvance">Salary Advance</label>
                                                    <input type="text" class="form-control" id="salaryAdvance"
                                                           v-model="salaryAdvanceTemp"
                                                           v-on:keyup="onBlurNumberAdvance">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="staffLoan">Staff Loan</label>
                                                    <input type="text" class="form-control" id="staffLoan"
                                                           v-model="staffLoanTemp"
                                                           v-on:keyup="onBlurNumberStaff">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="sectionSpace col-md-6">
                                                    <label for="otHours">OT Hours</label>
                                                    <input type="text" class="form-control" id="otHours"
                                                           v-model="otHoursTemp"
                                                           v-on:keyup="onBlurNumberOT">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="button-group">
                                            <button type="button" class="tg-btn" v-on:click="calculate()">Calculate</button>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-6">
                                    <div class="results-container">
                                        <div class="resultSection">
                                            <dl class="calc-results-extrainfo">
                                                <dt>Net Salary</dt>
                                                <dd><span class="total"></span></dd>
                                                <div class="section">
                                                    <div class="title">OT Rate</div>
                                                </div>
                                                <dt>OT Payment</dt>
                                                <dd><span class="total"></span></dd>
                                                <div class="section">
                                                    <div class="title">Employee Contribution</div>
                                                </div>
                                                <dt>EPF(8%)</dt>
                                                <dd><span class="total"></span></dd>
                                                <div class="section">
                                                    <div class="title">Employer Contribution</div>
                                                </div>
                                                <dt>EPF(12%)</dt>
                                                <dd><span class="total"></span></dd>
                                                <dt>ETF(3%)</dt>
                                                <dd><span class="total"></span></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
