let canvas =document.querySelector("#canvas")
let ambilFoto =document.querySelector("#ambil-foto")
let video =document.querySelector("#videoCam")
let espcam =document.querySelector("#stream")

// AMBIL FOTO UNTUK WEBCAM
// ambilFoto.addEventListener('click',function () {
//     canvas.getContext('2d').drawImage(video,0,0,canvas.width,canvas.height)
//     let image_url =canvas.toDataURL('image/jpeg')
// })

// AMBIL FOTO UNTUK SENSOR ESP
ambilFoto.addEventListener('click',function () {
    canvas.getContext('2d').drawImage(espcam,0,0,canvas.width,canvas.height)
    let image_url =canvas.toDataURL('image/jpg')
})


function startCam() {

    let All_mediaDevices = navigator.mediaDevices
    if (!All_mediaDevices || !All_mediaDevices.getUserMedia) {
        console.log("getUserMedia() not supported.");

        return;
    }
    All_mediaDevices.getUserMedia({
        // audio: true,
        video: true
    })
        .then(function (vidStream) {
            // var video = document.getElementById('videoCam');
            if ("srcObject" in video) {
                video.srcObject = vidStream;
            } else {
                video.src = window.URL.createObjectURL(vidStream);
            }
            video.onloadedmetadata = function (e) {
                video.play();
            };
        })
        .catch(function (e) {
            console.log(e.name + ": " + e.message);
        });
}
Window.onload(startCam())
