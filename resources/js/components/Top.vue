<template>
    <div id="top">
        <div class="row p-4">
            <div class="col-4">
                <form action="#" role="form">
                    <div class="form-group row align-items-center">
                        <label for="year" class="col-2 offset-2 align-items-center">{{__('top.Year')}}</label>
                        <select class="form-control col-7" name="year" id="year" v-model="selectedYear">
                            <option v-for="year in years">{{year}}</option>
                        </select>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="month" class="col-2 offset-2 align-items-center">{{__('top.Month')}}</label>
                        <select class="form-control col-7" name="month" id="month" v-model="selectedMonth">
                            <option value="01">1</option>
                            <option value="02">2</option>
                            <option value="03">3</option>
                            <option value="04">4</option>
                            <option value="05">5</option>
                            <option value="06">6</option>
                            <option value="07">7</option>
                            <option value="08">8</option>
                            <option value="09">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-9 offset-5 pr-0">
                            <button type="submit" id="display" class="btn btn-lg btn-block btn-primary btn-fixed-width" @click.prevent="fetchByMonth">{{__('top.display')}}</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <table class="table fixed-header">
                    <thead>
                    <tr>
                        <th class="text-center">{{__('top.driver_name')}}</th>
                        <th class="text-center">{{__('top.amount')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="item in tableData">
                        <td class="text-center">{{ item.driver_name }}</td>
                        <td class="text-center">{{ currencyFormatter(_.isNil(item.amount) ? 0 : item.amount) }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        name: 'Top',
        props: {
            fetchUrl: {type: String, required: true},
            monthUrl: {type: String, required: true},
        },
        data(){
            return {
                tableData: [],
                years: [],
                selectedYear: new Date().getFullYear(),
                selectedMonth: String('0'+(new Date().getMonth()+1)).slice(-2),
            };
        },
        methods: {
            currencyFormatter(amount) {
               return new Intl.NumberFormat('ja-JP',
                    { style: 'currency', currency: 'JPY' })
                    .format(amount);
            },
            fetchAll() {
                let component = this;
                axios.get(`${this.fetchUrl}/all`)
                    .then(data => {
                        component.tableData = data.data;
                    })
                    .catch(function (error) {
                        this.loadErrorDialog();
                    })
            },
            fetchByMonth(){
                let component = this;
                axios.get(this.monthUrl+'?year='+this.selectedYear+'&month='+this.selectedMonth)
                    .then(data => {
                        component.tableData = data.data;
                    })
                    .catch(error => {
                        this.loadErrorDialog();
                    });
            }
        },
        mounted(){
            let currentYear = new Date().getFullYear();
            this.years = [currentYear-2,currentYear-1,currentYear];
            this.fetchAll();
            this.currencyFormatter();
        }
    }
</script>
<style scoped>
    #top .table {
        background: #fff;
    }
    #top .fixed-header{
        width: 501px;
        table-layout: fixed;
    }
    #top .fixed-header tbody{
        display: block;
        overflow: auto;
        height: 250px;
        width: 100%;
    }
    #top .fixed-header thead tr{
        display: block;
        position: relative;
    }
    #top td:nth-child(1), #top th:nth-child(1) {
        width: 250px
    }
    #top td:nth-child(2), #top th:nth-child(2) {
        width: 250px
    }
</style>
