<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>title</title>
</head>
<body>

<div id="main">
    
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
<script>
    var main = document.getElementById('main');
    html2canvas(main).then(function (canvas) {
        var img = canvas.toDataURL("image/png");
        var doc = new jsPDF({
          orientation: 'landscape',
      });
        const pdfWidth = doc.internal.pageSize.width - 45;
        doc.addImage(img, 'JPEG', 20, 20, pdfWidth, 150);
        doc.save('dhruv cv.pdf');        
    });
    setTimeout(function () {
        window.close();
    }, 1000);

</script>
</body>
</html>
