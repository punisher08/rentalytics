<template>
    <div class="container">
        <div class="account-details">
            <div class="account-data">
               <div class="row">
                    <div class="col-md-6">
                        <p>Account ID: {{user.id}}</p>
                        <p>Type: {{user.role}}</p>
                        <p>Username: {{user.name}}</p>
                        <p>Password: {{user.password}}</p>
                        <p>Name: {{user.name}}</p>
                        <p>Brthdate: {{user.birthday}}</p>
                        <p>Age: {{user.age}}</p>
                        <p>Sex: {{user.gender}}</p>
                        <p>Contact No: {{user.contact}}</p>
                        <p>Email: {{user.email}}</p>
                       
                        <div class="_rental_places">
                            <h4>Rental places:</h4>
                            <div class="_grp">
                                <p>Place ID:</p>
                                <button type="button">View</button>
                            </div>
                            <div class="_grp">
                                <p>Place ID:</p>
                                <button type="button">View</button>
                            </div>
                            
                        </div>
                        

                        <div class="account-action">
                            <button type="button" @click="DeleteAccount(user.id)">Delete Account</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="verify-account">
                            <button type="button">Verify Account</button>
                            <a href="verifyacc"><button type="button">See Verification</button></a>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        props:['user'],
        mounted() {
            console.log('Component mounted.');
          
        },
        data(){
            return{
                
            }
            
        },
        methods: {
            DeleteAccount(id) {
                this.$swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.$swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                        axios.post(`/api/account/${id}/delete`)
                        .then(response => {
                            if(response.data.result){
                               setTimeout(() => {
                                window.location.href = '/admin/accounts';
                               }, 1500);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                    }
                    })
                },
            },
    }
</script>
