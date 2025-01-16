<style>
/* popup styling */
 .popupt {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background: rgba(0, 0, 0, 0.5); */    
    justify-content: center;
    align-items: center;
    z-index: 10000;
    animation: fadeIn 0.5s ease;
}
.popup-contentt {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    width: 300px;
    background-image: url("uploads/pareenapopuplogo.jpg");
    background-size:cover;
    background-position:center;
}
.popup-contentt h2 {
    margin: 0 0 10px;
    color:black;
    padding:10px 0;
}

.popup-contentt i{
    color:#0F2480;
    font-size:75px;
}


.popup-contentt .tick-mark {
    font-size: 50px;++
    color: #1B73AD;
}
.popup-contentt .close-btn {
    background: #1B73AD;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 20px;
}
.popup-contentt .close-btn:hover {
    background: #1B73AD;
}
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}




.popup {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    left: 0;
    top: 0;
    width: 100vw; /* Full width */
    height: 100%; /* Full height */
    background-color: rgba(0, 0, 0, 0.7); /* Black background with transparency */
    z-index: 10000; /* Sit on top */
    animation: fadeIn 0.5s; /* Animation */
    
}

.popup-content {
    background-color: #fff;
    margin: 5% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 22%; /* Could be more or less, depending on screen size */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    animation: slideIn 0.5s; /* Slide in animation */

     /* display:flex; 
    align-items:center;
    justify-content:space-between;
    flex-direction:column; */
}

.close-btn {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close-btn:hover,
.close-btn:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.popup .popup-content h2 {
    margin: 0 0 20px;
    /* padding-bottom: 20px; */
    padding-top: 20px;
    color: black;
}
.popup .popup-content p{
    margin-bottom: 20px;
    font-size: 15px;
    color: #888;
}

.popup .popup-content label {
    display: block;
    margin: 10px 0 5px;
}

.popup .popup-content input, textarea {
    width: calc(100% );
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid rgba(0, 0, 0, 0.443);
    border-radius: 10px;
    height: 40px;
    
}

.popup .popup-content textarea{
    height: 70px;
}

.popup .popup-content select{
    width:calc(100% ) ;
    height: 40px;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid rgba(0, 0, 0, 0.443);
    border-radius: 10px;
    color: rgba(128, 128, 128, 0.532);
    
}

.popup .popup-content button {
    background-color:black;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #4cae4c;
}
.btndiv{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Animation styles */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideIn {
    from { transform: translateY(-50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}


@media screen and (max-width: 600px){
    .popup-content{
        width: 85%;
        margin: 10% auto
    }
}



::placeholder {
    /* color:#0B5ADB; */
  opacity: 1; /* Firefox */
}

::-ms-input-placeholder { /* Edge 12-18 */
    color:#DDB322;
}

.imgdiv{
    width: 100%;
    display:flex;
    
  align-items: center;
  justify-content: center;
}



 /* popup styling end */
</style>




<!-- pop-up  -->
<div class="popup" id="queryPopup">
        <div class="popup-content">
            <span class="close-btn" id="closeBtn1" style="z-index: 1000;">&times;</span>
            <div class="imgdiv">
                <img src="images/logobg.png"style="height:60px;" alt="">
            </div>
            <h5 class="tg-element-title"style="color:#0B5ADB; text-align:center;font-weight:600;font-size:25px;">Connect Today</h5>
            <h4  style="font-weight: 600; color:black; text-align:center;">For Expert IT Solution !</h4><br>
            <form id="submissionForm" action="send_contact.php" method="post"  class="default-form2 contact-form-validated">



                <!-- <input type="hidden" name="access_key" value=""> -->

                            <div class="row">
                                
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="name" value="" placeholder="Your Full Name" required="">
                                        <!-- <div class="icon"><span class="icon-paper-plane"></span></div> -->
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="phone" value="" placeholder="Your Phone No." required=""onkeypress='return event.charCode >=48 && event.charCode <=57' maxlength="10">
                                        <!-- <div class="icon"><span class="icon-paper-plane"></span></div> -->
                                    </div>
                                </div>
                               
                            </div>

                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="input-box">
                                        <input type="email" placeholder="Your email" name="email" >
                                        <!-- <div class="icon"><span class="icon-pin"></span></div> -->
                                    </div>
                                </div>
                            </div>
                    
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <textarea name="message" placeholder="Enter Your Message.." required=""></textarea>
                                        <!-- <div class="icon"><span class="icon-envelope"></span></div> -->
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="contact-one__form-btn">
                                        <button type="submit" class="button-style-1" name="send"style="color:white;">
                                            Send Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
        </div>
        </div>
        
        <!-- pop-up end -->


         <!-- tickright message  -->
         <div id="popupt" class="popupt">
        <div class="popup-contentt">
        <div class="imgdiv">
                <img src="images/logobg.png"style="height:60px;" alt="">
            </div>
            <div class="tick-mark"><i style="color:black;font-size:50px;" class="fa-regular fa-circle-check"></i></div>
            <!-- <h3>Your message has been sent successfully!</h3> -->
            <h2 style="font-weight:600;font-size:22px;color:#0B5ADB;">Message Sent </h2>
            <h5  style="font-weight:400;color:black;font-size:18px;">Our Team will connect with you shortly or call <br> +91 98107 26787</h5>
            <button class="close-btn" onclick="closePopup()" style="background-color:#FFD700;color:black;">Close</button>
        </div>
    </div>

     <!-- tickright message end -->




      

<script>
    // document.addEventListener("DOMContentLoaded", () => {

        //  Show the pop-up after 15 seconds
        setTimeout(() => {
    document.getElementById("queryPopup").style.display = "block";
}, 20000); // 2000 milliseconds = 2 seconds

function getQuote() {
    document.getElementById("queryPopup").style.display = "block";
    console.log("Quote btn clicked");
}

// Close the pop-up when the close button is clicked
document.getElementById("closeBtn1").onclick = () => {
    document.getElementById("queryPopup").style.display = "none";
    console.log("closebtn")
};

setTimeout(() => {
            document.getElementById('submissionForm').reset();
          },  2000); // 15000 milliseconds = 15 seconds
        



   
// });

// document.addEventListener("DOMContentLoaded", () => {
//     //  Show the pop-up after 15 seconds
//      setTimeout(() => {
//          document.getElementById("queryPopup").style.display = "block";
//      },  55000); // 15000 milliseconds = 15 seconds
   
//  });


// function handleFormSubmit(event) {
//             // event.preventDefault(); // Prevent default form submission
//              document.getElementById("queryPopup").style.display = "none";
//              document.getElementById("popupt").style.display = "flex";
//         }



document.getElementById('submissionForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        document.getElementById("queryPopup").style.display = "none";
        document.getElementById("popupt").style.display = "flex";
        
        setTimeout(() => {
            document.getElementById('ContactForm').reset();
          },  2000); // 2000 milliseconds = 2 seconds
        
        
        const formData = new FormData(this);
        
        fetch('send_contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // alert('Form submitted successfully!');
                document.getElementById('submissionForm').reset(); // Optionally reset the form
            } else {
                alert('Submission failed: ' + data.error);
            }
        })
        .catch(error => {
            console.alert('Error:');
            // alert('Submission failed: ' + error.message);
        });
    });

        function closePopup() {
            document.getElementById('popupt').style.display = 'none';
        }

</script>



