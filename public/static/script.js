	const imgPreview = document.getElementById('img-preview')
	const imgUploader = document.getElementById('img-uploader')
	const imageUploadbar = document.getElementById('img-upload-bar');
	const url = document.getElementById('url')

	const CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/estefany/image/upload';
	const cloudinary_code = 'akynwxvu';

	console.log("holaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
	console.log(imgUploader)

	imgUploader.addEventListener('change', async (event) => {
		const file = event.target.files[0];

		const formData = new FormData()
		formData.append('file', file)
		formData.append('upload_preset', cloudinary_code)

		const res = await axios.post(CLOUDINARY_URL, formData, {
			headers: {
				'content-type': 'multipart/form-data'
			},

			onUploadProgress(event) {
				let progress = Math.round((event.loaded * 100.0) / event.total);
		
				imageUploadbar.setAttribute('value', progress);
			}

		});

		imgPreview.src = res.data.secure_url;
		url.value = imgPreview.src

	});

const videoPreview = document.getElementById('video-preview')
const videoUploader = document.getElementById('video-uploader')
const videoUploadbar = document.getElementById('video-upload-bar');
const urlVideo = document.getElementById('urlV')

const CLOUDINARY_URL1 = 'https://api.cloudinary.com/v1_1/estefany/video/upload';
const cloudinary_code1 = 'akynwxvu';

videoUploader.addEventListener('change', async (event) => {
	const file1 = event.target.files[0];

	const formData = new FormData()
	formData.append('file', file1)
	formData.append('upload_preset', cloudinary_code1)

	const res = await axios.post(CLOUDINARY_URL1, formData, {
		headers: {
			'content-type': 'multipart/form-data'
		},

		onUploadProgress(event) {
			let progress = Math.round((event.loaded * 100.0) / event.total);
			console.log(progress);
			videoUploadbar.setAttribute('value', progress);
		}

	});

	console.log(res);
	videoPreview.src = res.data.secure_url
	urlVideo.value = videoPreview.src

});

function likes(id) {
	parametrs = {
		id: id
	}
	$.getJSON("/likes?id=" + id, function (data) {
		if (data["me_gusta"] == false) {
			$("#cont").text(parseInt($("#cont").text()) - 1);
			$("#corazon").css("color", "white");
		}
		if (data["me_gusta"] == true) {
			$("#cont").text(parseInt($("#cont").text()) + 1);
			$("#corazon").css("background", "linear-gradient(#e14eca, #ba54f5)");
			$("#corazon").css("-webkit-background-clip", "text");
			$("#corazon").css("color", "transparent");
		}
	});
};
function eliminarCoreo(id) {
	swal.fire({
	  "title": "¿Estas seguro?",
	  "text": "Estas a punto de eliminar una coreografia que luego no podras recuperar!",
	  "icon": "warning",
	  "showCancelButton": true,
	  "cancelButtonText": "No, cancelar",
	  "confirmButtonText": "Si, eliminar",
	  "confirmButtonColor": "#dc3545",
	  "reverseButtons": true,
	})
	  .then(function (result) {
		if (result.isConfirmed) {
		  window.location.href="eliminado?id="+id
		  swal.fire({
			"title": "Nos duele :c",
			"text": "Tu coreografia ha sido eliminada",
			"icon": "success"
		  })
		} else {
		  swal.fire({
			"text": "Tu coreografia esta a salvo",
			"icon": "success",

		  });
		}
	  });
  }




