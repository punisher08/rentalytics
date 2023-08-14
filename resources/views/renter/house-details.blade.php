@extends('layouts.renter')
@section('content')
<section class="houser-details">
<div class="back-button">
    <h2></h2>
    <a href="#"><button type="button">Back</button></a>
</div>
    
    <div class="view-place-container">
        <div class="view-place-wrapper">
            
            <div class="image-area">
                    <img name="slide">
                </div>

            <div class="description-area">
                <p>Status:</p>
                <p>Dormitory</p>
                <p>Ramos street, Tarlac City</p>
                <p>@ 2000/mon.</p>
            </div>
            <div class="two-button">
                <button type="button">Message Owner</button>
                <button type="button">Make a Reservation</button>
            </div>
            <div class="place-info">
                <p><b>Description:</b> A nice Dormitory for all. come and visit us or Contact me for inquiries.</p>
                <p>Dormitory</p>
                <p>Beds: 2</p>
                <p>Bathroom: 1</p>
                <table>
                    <th>Amenities</th>
                    <th>House Rules</th>
                    <tr>
                        <td>Wi-fi</td>
                        <td>No Smoking</td>
                    </tr>
                        <tr>
                            <td></td>
                            <td>No Alcohol</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>No Pets</td>
                        </tr>
                </table>   
            </div>
            <div class="place-location">
                <img src="https://i.stack.imgur.com/k0akf.png">
            </div>
            <div class="rating-review-section">
                <h2>Rating & Rewview</h2>
                <br>
                <p>L***y F. <br>Very Nice place. Walang Lamok!</p>
            </div>
        </div>
    </div>
</section>
<script>
          var i = 0
        var images = [];
        var time = 2000;

        images[0] = 'https://ap.rdcpix.com/f5c52cd68f1463459e96e4653ab2cc03l-m2594387151od-w480_h360.jpg';
        images[1] = 'https://urbanland.uli.org/wp-content/uploads/sites/5/2023/03/Ashwood-Place-Naperville-IL800.jpg';
        images[2] = 'https://www.trulia.com/pictures/thumbs_4/zillowstatic/fp/1c99f2c7fb170262c2fd6e67eda6e4f6-full.jpg';
        images[3] = 'https://urbanland.uli.org/wp-content/uploads/sites/5/2023/03/Ashwood-Place-Naperville-IL800.jpg';
        images[4] = 'https://www.trulia.com/pictures/thumbs_4/zillowstatic/fp/1c99f2c7fb170262c2fd6e67eda6e4f6-full.jpg';

        function changeImage(){
            document.slide.src = images[i];
            if( i < images.length - 1 ){
                i++;
            }else{
                i = 0;
            }
            setTimeout("changeImage()", time);
        }
        window.onload = changeImage;
</script>
@endsection