<template>
<div class="container">
    <div class="row">
        <div class="col-12">
        
            <div class="my-5">
                <h3>My Profile</h3>
                <hr>
            </div>
            <form class="file-upload">
                <div class="row mb-5 gx-5">
                    <div class="col-xxl-4">
                        <div class="bg-secondary-soft px-4 py-5 rounded">
                            <div class="row g-3">
                                <h4 class="mb-4 mt-0">Upload your profile photo</h4>
                                <div class="text-center">

                                    <div class="square position-relative display-2 mb-3">
                                        <i
                                            class="fas fa-fw fa-user position-absolute top-50 start-50 translate-middle text-secondary"></i>
                                    </div>

                                    <input type="file" id="customFile" name="file" hidden="">
                                    <label class="btn btn-success-soft btn-block" for="customFile">Upload</label>
                                    <button type="button" class="btn btn-danger-soft">Remove</button>

                                    <p class="text-muted mt-3 mb-0"><span class="me-1">Note:</span>Minimum size 300px x
                                        300px</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-8 mb-5 mb-xxl-0">
                        <div class="bg-secondary-soft px-4 py-5 rounded">
                            <div class="row g-3">
                                <h4 class="mb-4 mt-0">Contact detail</h4>
                               
                                <div class="col-md-6">
                                    <label class="form-label">First Name *</label>
                                    <input type="text" class="form-control" placeholder="" aria-label="First name">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" placeholder="" aria-label="Last name"
                                        value="Doe">
                                </div>
                               
                                <div class="col-md-6">
                                    <label class="form-label">Phone number *</label>
                                    <input type="text" class="form-control" placeholder="" aria-label="Phone number"
                                        value="(333) 000 555">
                                </div>
                               
                                <div class="col-md-6">
                                    <label class="form-label">Mobile number *</label>
                                    <input type="text" class="form-control" placeholder="" aria-label="Phone number"
                                        value="+91 9852 8855 252">
                                </div>
                               
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="inputEmail4"
                                        value="example@homerealty.com">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Skype *</label>
                                    <input type="text" class="form-control" placeholder="" aria-label="Phone number"
                                        value="Scaralet D">
                                </div>
                            </div> 
                        </div>
                    </div>

                </div>
                <div class="gap-3 d-md-flex justify-content-md-end text-center">
                    <button type="button" class="btn btn-danger btn-lg">Delete profile</button>
                    <button type="button" class="btn btn-primary btn-lg">Update profile</button>
                </div>
            </form>
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';
    export default {
        data(){
            return{
                user:null,
            }
        },
        mounted() {
           this.getUser();
        },
        methods: {
            getUser(){
                axios.get('/api/admin/profile').then(response => console.log(response))
            }
        },
    }
</script>
