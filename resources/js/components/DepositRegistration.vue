<template>

    <div id="app">

        <div class="row mb-4">
            <div class="col-2">
                <a :href="backUrl"
                   class="btn btn-lg btn-warning btn-block btn-fixed-width">{{__('common.back')}}</a>
            </div>
            <div class="col-4 offset-1">
                <h1 class="text-center">{{__('deposit.deposit_registration')}}</h1>
            </div>
            <div class="col-5 text-right">
                <button class="btn btn-lg btn-danger btn-fixed-width" @click = "create" :disabled="!registerMode">{{__('common.register')}}</button>
                <button class="btn btn-lg btn-danger btn-fixed-width" @click = "update" :disabled="!editable">{{__('common.edit')}}</button>
                <button class="btn btn-lg btn-danger btn-fixed-width" @click = "remove" :disabled="!editable">{{__('deposit.delete')}}</button>
            </div>
        </div>

        <div class="row mt-4 mb-4">
            <div class="mx-auto">

                <form action="#" class="form-inline" @submit.prevent="search">
                    <div class="form-group ml-3">
                        <label for="shipper">{{__('deposit.shipper')}}</label>
                    </div>
                    <div class="form-group ml-1">
                        <select id="shipper" v-model="filter.shipper" class="form-control" style="max-width:200px;" required>
                            <option value=""></option>
                            <option v-for="shipper in shippers" :value="shipper.shipper_id">
                                {{shipper.fullname}}
                            </option>
                        </select>
                    </div>
                    <div class="form-group ml-3">
                        <label for="year">{{__('deposit.deposit_year')}}</label>
                    </div>
                    <div class="form-group ml-1">
                        <select id="year" v-model="filter.year"
                                v-on:change="changeDays" class="form-control">
                            <option value=""></option>
                            <option v-for="x in 30" :value="new Date().getFullYear() - x + 1">
                                {{ new Date().getFullYear() - x + 1}}
                            </option>
                        </select>
                    </div>
                    <div class="form-group ml-3">
                        <label for="month">{{__('deposit.deposit_month')}}</label>
                    </div>
                    <div class="form-group ml-1">
                        <select id="month" v-model="filter.month" v-on:change="changeDays" class="form-control">
                            <option value=""></option>
                            <option v-for="(month, index) in months" :value="index+1">
                                {{ month }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group ml-3">
                        <label for="day">{{__('deposit.deposit_day')}}</label>
                    </div>
                    <div class="form-group ml-1">
                        <select id="day" v-model="filter.day" class="form-control" style="width: 60px;">
                            <option value=""></option>
                            <option v-for="day in dayCount" :value="day">
                                {{ day }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group ml-3">
                        <button type="submit" class="btn btn-primary btn-fixed-width">{{__('common.search')}}</button>
                    </div>
                    <div class="form-group ml-1">
                        <button type="reset" @click='clear' class="btn btn-primary btn-fixed-width">{{__('common.clear')}}</button>
                    </div>
                </form>

            </div>

        </div>

        <form>
        <table cellpadding="5" class="mt-4">

            <tbody>
            <tr>
                <td class="text-right">{{__('deposit.shipper')}}</td>
                <td>
                    <select class="form-control" v-model="deposit.shipper_id" :disabled="!registerMode" style="max-width:300px;">
                        <option v-for="shipper in shippers" :value="shipper.shipper_id">
                            {{shipper.fullname}}
                        </option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <input type="hidden" v-model="deposit.deposit_id"/>
                <td class="text-right">{{__('deposit.deposit_day')}}</td>
                <td>
                    <datepicker v-model="deposit.deposit_day" :disabled="!registerMode" required
                        :bootstrap-styling="true" :format="options.weekday"
                        :clear-button="registerMode" :language="options.language.ja"></datepicker>
                </td>
                <td></td>
            </tr>
            <tr>
                <td class="text-right">{{__('deposit.transfer')}}</td>
                <td><money class="form-control" v-model="deposit.deposit_amount" v-bind="money" :disabled="!registerMode && !editable" required/></td>
                <td>{{__('deposit.yen')}}</td>
            </tr>
            <tr>
                <td class="text-right">{{__('deposit.offset')}}</td>
                <td><money class="form-control" v-model="deposit.offset" v-bind="money" :disabled="!registerMode && !editable"/></td>
                <td>{{__('deposit.yen')}}</td>
            </tr>
            <tr>
                <td class="text-right">{{__('deposit.other')}}</td>
                <td><money class="form-control" v-model="deposit.other" v-bind="money" :disabled="!registerMode && !editable"/></td>
                <td>{{__('deposit.yen')}}</td>
            </tr>
            <tr>
                <td class="text-right">{{__('deposit.transfer_fee')}}</td>
                <td><money class="form-control" v-model="deposit.fee" v-bind="money" :disabled="!registerMode && !editable" /></td>
                <td>{{__('deposit.yen')}}</td>
            </tr>
            </tbody>

            <tfoot>
            <tr>
                <td class="text-right">{{__('deposit.total_credit_amount')}}</td>
                <td><money class="form-control" v-model="total" v-bind="money" disabled/></td>
                <td>{{__('deposit.yen')}}</td>
                <td> &nbsp;&nbsp;&nbsp; </td>
                <td class="text-right">{{__('deposit.invoice_balance')}}</td>
                <td><money class="form-control" v-model="invoice" v-bind="money" disabled/></td>
                <td>{{__('deposit.yen')}}</td>
            </tr>
            </tfoot>
        </table>
        </form>
    </div>

</template>

<script>

    import Vue from "vue";
    import Datepicker from "vuejs-datepicker";
    import {en, ja} from 'vuejs-datepicker/dist/locale'
    import {Money} from 'v-money'

    export default {
        components: {
            Datepicker, Money
        },
        props : {
            backUrl : {required : true},
            resourceUrl : {required : true},
            shipperUrl : {required : true},
        },
        data(){
            return {
                money: {
                    decimal: '',
                    thousands: ',',
                    prefix: '\xA5',
                    suffix: '',
                    precision: 0,
                    masked: false /* doesn't work with directive */
                },
                deposit : {
                    deposit_id : null,
                    shipper_id : null,
                    deposit_day : null,
                    deposit_amount : 0,
                    offset : 0,
                    other : 0,
                    fee : 0,
                },
                total : null,
                invoice : null,
                editable : false,
                registerMode : true,
                filter : {
                    shipper : '',
                    year : '',
                    month : '',
                    day : ''
                },
                shippers : [],
                months : [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
                dayCount : 0,
                options: {
                    monthFormat: "yyyy/MM",
                    weekday: "yyyy/MM/dd",
                    language: {
                        en: en,
                        ja: ja
                    },
                },
            }
        },

        mounted() {
            this.fetchShippers();
        },

        methods : {
            fetchShippers(){
                axios.get(this.shipperUrl)
                    .then(response =>
                        this.shippers = response.data
                    ).catch (error =>
                        this.loadErrorDialog()
                    )
            },
            changeDays(){
                if (this.filter.year != '' && this.filter.month != ''){
                    this.dayCount = new Date(this.filter.year, this.filter.month, 0).getDate();
                }
            },
            search(){
                axios.post(this.resourceUrl+'/filter',this.filter)
                    .then(response => {
                        this.deposit = response.data.deposit;
                        this.total = response.data.total;
                        this.invoice = response.data.invoice;
                        this.editable = response.data.unique;
                        this.registerMode = false;
                    }).catch (error => {
                        this.loadErrorDialog();
                        this.clear();
                    })
            },
            create(){
                let deposit = Object.assign({},this.deposit);
                if (this.deposit.deposit_day){
                    deposit.deposit_day = this.deposit.deposit_day.toISOString().slice(0,10);
                }
                axios.post(this.resourceUrl, deposit)
                    .then(response => {
                        this.createSuccessDialog();
                        this.clear();
                    }).catch(error => {
                        this.errorDialog(error);
                })
            },
            update(){
                axios.put(this.resourceUrl+'/'+this.deposit.deposit_id, this.deposit)
                    .then(response => {
                        this.updateSuccessDialog();
                    }).catch(error => {
                        this.errorDialog(error);
                })
            },
            remove(){
                axios.delete(this.resourceUrl+'/'+this.deposit.deposit_id)
                    .then(response => {
                        this.deleteSuccessDialog();
                        this.clear();
                    }).catch(error => {
                        this.errorDialog(error);
                })
            },
            clear(){
                this.deposit = {
                    deposit_id : null,
                    shipper_id : null,
                    deposit_day : null,
                    deposit_amount : 0,
                    offset : 0,
                    other : 0,
                    fee : 0,
                };
                this.total = null;
                this.invoice = null;
                this.editable = false;
                this.registerMode = true;
                this.filter = {
                    shipper : '',
                        year : '',
                        month : '',
                        day : ''
                };
            }
        },

        name : 'DepositRegistration'

    }

</script>
