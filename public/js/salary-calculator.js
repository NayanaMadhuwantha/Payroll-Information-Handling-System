// JavaScript Document
Vue.use(window.vuelidate.default)
const {required, minLength} = window.validators

var app = new Vue({
    el: '#app_salary_cal ',
    data: {
        basicSalary: '',
        basicSalaryTemp: '',

        allowances: '',
        allowancesTemp: '',

        salaryAdvance: '',
        salaryAdvanceTemp: '',

        staffLoan: '',
        staffLoanTemp: '',
		
		otHours: '',
		otHoursTemp: '',
		
        totalEarnings: '0.00',
        EPFAmount: '0.00',
        totalDeductions: '0.00',
        netSalary: '0.00',
        EPF_12: '0.00',
        ETF_3: '0.00',
        contribution: '0.00',
		OTAmount: '0.00',
    },
    validations: {
        basicSalaryTemp: {required},
    },
    methods: {
        status(validation) {
            return {
                error: validation.$error,
                dirty: validation.$dirty
            }
        },

        thousandSeprator(amount) {
            if (amount !== '' || amount !== undefined || amount !== 0 || amount !== '0' || amount !== null) {
                return amount.toString().replace(/\D(?<!\.\d*)/g, "").toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
            } else {
                return amount;
            }
        },

        onBlurNumber(e) {
            this.basicSalary = this.basicSalaryTemp;
            this.basicSalaryTemp = this.thousandSeprator(this.basicSalaryTemp);
        },

        onBlurNumberAllow(e) {
            this.allowances = this.allowancesTemp;
            this.allowancesTemp = this.thousandSeprator(this.allowancesTemp);
        },

        onBlurNumberAdvance(e) {
            this.salaryAdvance = this.salaryAdvanceTemp;
            this.salaryAdvanceTemp = this.thousandSeprator(this.salaryAdvanceTemp);
        },

        onBlurNumberStaff(e) {
            this.staffLoan = this.staffLoanTemp;
            this.staffLoanTemp = this.thousandSeprator(this.staffLoanTemp);
        },
		
		onBlurNumberOT(e) {
            this.otHours = this.otHoursTemp;
            this.otHoursTemp = this.thousandSeprator(this.otHoursTemp);
        },

        calculate: function () {

            this.$v.$touch();
            if (this.$v.$invalid) {
                return;
            }
            this.basicSalary = this.basicSalary.split(',').join("");

            this.EPFAmount = this.basicSalary * 8 / 100;
            this.EPF_12 = this.basicSalary * 12 / 100;
            this.ETF_3 = this.basicSalary * 3 / 100;
            this.contribution = parseFloat(this.EPF_12) + parseFloat(this.ETF_3);

            if(this.allowances == '' || this.allowances == null || this.allowancesTemp == '' || this.allowancesTemp == null){

                this.allowances = 0;
                this.allowancesTemp = 0;
            } else {
                this.allowances = this.allowances.split(',').join("");
            }

            if(this.salaryAdvance == '' || this.salaryAdvance == null|| this.salaryAdvanceTemp == '' || this.salaryAdvanceTemp == null){
                this.salaryAdvance = 0;
                this.salaryAdvanceTemp = 0;
            } else {
                this.salaryAdvance = this.salaryAdvance.split(',').join("");
            }

            if(this.staffLoan == '' || this.staffLoan == null|| this.staffLoanTemp == '' || this.staffLoanTemp == null){
                this.staffLoan = 0;
                this.staffLoanTemp = 0;
            } else {
                this.staffLoan = this.staffLoan.split(',').join("");
            }
			if(this.otHours == '' || this.otHours == null || this.otHoursTemp == '' || this.otHoursTemp == null){

                this.otHours = 0;
                this.otHoursTemp = 0;
            } else {
                this.otHours = this.otHours.split(',').join("");
            }

            this.totalEarnings = parseFloat(this.basicSalary) + parseFloat(this.allowances);
            this.totalDeductions = parseFloat(this.EPFAmount) + parseFloat(this.salaryAdvance) + parseFloat(this.staffLoan);
            this.netSalary = round(parseFloat(this.totalEarnings) - parseFloat(this.totalDeductions), 2);

        },


    },

});