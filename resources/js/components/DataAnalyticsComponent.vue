<template>
    <div class="">
        <section class="data-analytics">
    <div class="analytics-container"  v-if="selectedYear === null">
        <div class="analytics-wrapper">
            <div class="year" v-for="year in years">
               <button type="button" @click="Setyear(year)">{{ year }}</button>
            </div>
        </div>
    </div>
    <!-- Month -->
    <div class="analytics-container" v-if="selectedYear !== null">
        <div class="analytics-wrapper">
            <div class="year" v-for="month in months">
               <button type="button" @click="Setmonth(month)">{{ month }}</button>
            </div>
        </div>
    </div>
</section>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                years:[
                    2023,
                    2024,
                    2025,
                    2026,
                    2027,
                    2028,
                    2029,
                    2030,
                    2031,
                    2032,
                    2033,
                    2034,
                ],
                months:[
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December',
                ],
                selectedYear:null,
                selectedMonth:null,
               
            }
        },
        methods:{
            Setyear(value){
                this.selectedYear = value;
            },
            Setmonth(value){
                this.selectedMonth = value;
            }
        }
    }
</script>
