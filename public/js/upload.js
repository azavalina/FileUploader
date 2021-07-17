$(document).ready(function () {
    function validate(formData, jqForm, options) {
        console.log('validate');
        const form = jqForm[0];
        if (!form.file.value) {
            alert('File not found');
            return false;
        }
    }

    (function() {

        const bar = $('.bar');
        const percent = $('.percent');
        const status = $('#status');

        $('form').ajaxForm({
            beforeSend: function() {
                console.log('send')
                status.empty();
                const percentVal = '0%';
                const posterValue = $('input[name=file]').fieldValue();
                bar.width(percentVal)
                percent.html(percentVal);
            },
            uploadProgress: function(event, position, total, percentComplete) {
                const percentVal = percentComplete + '%';
                bar.width(percentVal)
                percent.html(percentVal);
            },
            success: function() {
                const percentVal = 'Wait, Saving';
                bar.width(percentVal)
                percent.html(percentVal);
            },
            complete: function(xhr) {
                status.html(xhr.responseText);
                alert('Uploaded Successfully');
                window.location.href = "/" + "post/create";
            }
        });

    })();
})