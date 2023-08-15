<template>
    <div class="">
       <section class="rental-places" v-if="selectedBarangay === null">
            <div class="search-engine">
                <div class="searh-engine-places">
                    <input type="text" placeholder="Select Barangay" v-model="search" >
                    <button type="button">Search</button>
                </div>
            </div>
            <div class="places-container">
                <div class="places-wrapper">
                    <div class="card-barangay" >
                    <button type="button" v-for="place in filteredPlaces" @click="SetBarangay(place)">{{ place.name }}</button>
                    </div>
                </div>
            </div>
       </section>
       <!--  -->
       <section class="detailed_list" v-if="selectedBarangay !== null">

    <div class="barangay-data-table">
        <div class="barangay-data-wrapper">
            <table class="rental-places-table">
                <thead>
                    <tr>
                        <th><a href="">Place ID</a></th>
                        <th><a href="">Ratings</a></th>
                        <th><a href="">Reviews</a></th>
                        <th><a href="">Actions</a></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through each place and its rental places -->
                    <tr v-for="barangay in selectedBarangay.rental_places">
                        <td>{{ barangay.id }}</td>
                        <td>{{ barangay.rating }}</td>
                        <td>{{ barangay.reviews }}</td>
                        <td>
                            <div class="barangay-button">
                                <a href="./viewAcc.php"><button type="button">View</button></a>
                                    <button type="button">Pin</button>
                            </div>
                        </td>
                        
                    </tr>
                </tbody>
                </table>

        </div>
        <!-- data end here -->
    </div>
    <!-- table end here -->
       </section>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                selectedBarangay:null,
                search:null,
                places: [
                    {
                        name:'Amucao',
                        rental_places:[
                            {id:'0127',rating:'4.7',reviews:'79'},
                            {id:'0128',rating:'5.0',reviews:'79'},
                            {id:'0129',rating:'4',reviews:'79'},
                            {id:'0130',rating:'5.0',reviews:'79'},
                        ]
                    },
                    {
                        name:'Balingcanaway',
                        rental_places:[
                            {id:'0127',rating:'4.7',reviews:'79'},
                            {id:'0128',rating:'5.0',reviews:'79'},
                            {id:'0129',rating:'4',reviews:'79'},
                            {id:'0130',rating:'5.0',reviews:'79'},
                        ]
                    },
                    {
                        name:'Balsik',
                        rental_places:[
                            {id:'0127',rating:'4.7',reviews:'79'},
                            {id:'0128',rating:'5.0',reviews:'79'},
                            {id:'0129',rating:'4',reviews:'79'},
                            {id:'0130',rating:'5.0',reviews:'79'},
                        ]
                    },
                    {
                        name:'Bantog',
                        rental_places:[
                            {id:'0127',rating:'4.7',reviews:'79'},
                            {id:'0128',rating:'5.0',reviews:'79'},
                            {id:'0129',rating:'4',reviews:'79'},
                            {id:'0130',rating:'5.0',reviews:'79'},
                        ]
                    },
                    {
                        name:'Tarlac',
                        rental_places:[
                            {id:'0127',rating:'4.7',reviews:'79'},
                            {id:'0128',rating:'5.0',reviews:'79'},
                            {id:'0129',rating:'4',reviews:'79'},
                            {id:'0130',rating:'5.0',reviews:'79'},
                        ]
                    },
                    {
                        name:'Amucao',
                        rental_places:[
                            {id:'0127',rating:'4.7',reviews:'79'},
                            {id:'0128',rating:'5.0',reviews:'79'},
                            {id:'0129',rating:'4',reviews:'79'},
                            {id:'0130',rating:'5.0',reviews:'79'},
                        ]
                    },
                    {
                        name:'Balingcanaway',
                        rental_places:[
                            {id:'0127',rating:'4.7',reviews:'79'},
                            {id:'0128',rating:'5.0',reviews:'79'},
                            {id:'0129',rating:'4',reviews:'79'},
                            {id:'0130',rating:'5.0',reviews:'79'},
                        ]
                    },
                    {
                        name:'Balsik',
                        rental_places:[
                            {id:'0127',rating:'4.7',reviews:'79'},
                            {id:'0128',rating:'5.0',reviews:'79'},
                            {id:'0129',rating:'4',reviews:'79'},
                            {id:'0130',rating:'5.0',reviews:'79'},
                        ]
                    },
                    {
                        name:'Bantog',
                        rental_places:[
                            {id:'0127',rating:'4.7',reviews:'79'},
                            {id:'0128',rating:'5.0',reviews:'79'},
                            {id:'0129',rating:'4',reviews:'79'},
                            {id:'0130',rating:'5.0',reviews:'79'},
                        ]
                    },
                    {
                        name:'Tarlac',
                        rental_places:[
                            {id:'0127',rating:'4.7',reviews:'79'},
                            {id:'0128',rating:'5.0',reviews:'79'},
                            {id:'0129',rating:'4',reviews:'79'},
                            {id:'0130',rating:'5.0',reviews:'79'},
                        ]
                    },
                ]

            }
        },
        computed: {
            filteredPlaces() {
                if (this.search === null) {
                    return this.places; 
                } else {
                    return this.places.filter(place => place.name.toLowerCase().includes(this.search.toLowerCase()));
                }
            }
        },
        methods:{
            SetBarangay(value){
                this.selectedBarangay = value;
            },
        }
    }
</script>
<style scoped>
.rental-places-table tr td{
    padding: 20px 10px;
    text-align: center;
}
.rental-places-table{
    background-color: #fff;
    min-width: 1200px;
    width: 100%;
    padding: 20px;
}
.rental-places-table th {
   text-align: center;
}
.rental-places-table th a{
    background-color: #457e8a;
    border-radius: 10px;
    color: #fff;
    font-size: 1.2em;
    padding: 5px 70px;
    text-align: center;
    width: 90%;
    display: block;
    margin: auto;
}
.detailed_list{
    margin-top: 20px;
}
</style>