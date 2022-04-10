<?php
    require('./includes/auth_validate.php');
    require_once('./includes/config.php');
    include_once('./includes/header.php');
?>

<section class="main upload-note">
    <div class="upload-sec">
        <a href="mynotes.php" class="my-uploads">
            <h2 class="my-uploads">My Uploads</h2>
        </a>
        <a href="./upload-note.php" class="upload">
            <h2 class="upload">Upload</h2>
        </a>
    </div>

    <div class="main_container_LD">
        <div class="fileUpload_LD">
            <div class="file-upload-wrapper">
                <div class="card card-body">
                    <div class="file-upload-text">
                        <div class="subFile-upload-text">
                            <i class="fas fa-cloud-upload-alt fileIcon"></i>
                            <p id="up-filename">Upload Note File </p>
                        </div>
                    </div>
                    <input type="file" id="up-fileInput" class="file_upload" accept=".pdf">
                </div>
			</div>
					<img id="up-removeImage" src="./assets/img/trash-alt-solid.svg" onclick="remove_image_click()" class="far fa-trash-alt">
				<canvas id="up-file_preview">
        </div>
        <div class="detailsInput_LD">

            <input class="note-title pad" type="text" id="up-title" placeholder="Enter Note Title">

            <!-- <select class="dropdown verify-faculty" id="up-verifier">
                <option value="0">Select Profesor</option>
                <option value="Prof. (Dr.) Pariza Kamboj" class="prof-1">Prof. (Dr.) Pariza Kamboj</option>
                <option value="Prof. (Dr.) Keyur Rana" class="prof-2">Prof. (Dr.) Keyur Rana</option>
                <option value="Prof. (Dr.) Mayuri Mehta" class="prof-3">Prof. (Dr.) Mayuri Mehta</option>
                <option value="Prof. (Dr.) Dipali Kasat" class="prof-4">Prof. (Dr.) Dipali Kasat</option>
                <option value="Prof. Bintu Kadhiwala" class="prof-5">Prof. Bintu Kadhiwala</option>
                <option value="Prof. Snehal Gandhi" class="prof-6">Prof. Snehal Gandhi</option>
                <option value="Prof. Urmi Desai" class="prof-7">Prof. Urmi Desai</option>
                <option value="Prof. Bhumika Shah" class="prof-8">Prof. Bhumika Shah</option>
                <option value="Prof. Jaydeep J. Gheewala" class="prof-9">Prof. Jaydeep J. Gheewala</option>
                <option value="Prof. Bhumika Bhatt" class="prof-10">Prof. Bhumika Bhatt</option>
                <option value="Prof. Jayesh Chaudhary" class="prof-11"> Prof. Jayesh Chaudhary</option>
                <option value="Prof. Rakesh Patel" class="prof-12"> Prof. Rakesh Patel</option>
            </select> -->

            <div class="desc-box">
                <p class="desc-title">Write Description about Note (Max. 150 words)</p>
                <textarea name="desc" id="up-desc" cols="65" rows="15" class="desc-area"></textarea>
            </div>

            <p id="up-status"></p>

            <button type="button" class="btn btn-outline-primary btn-lg btn-block btnMargin"
                onclick="upload_note()">Submit</button>
        </div>
    </div>
</section>

<?php
    include_once('./includes/footer.php');
?>