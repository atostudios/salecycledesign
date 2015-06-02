 var editor = CodeMirror.fromTextArea(document.getElementById('user-html'), {
		mode : {

			name: 'htmlmixed'
		},
		lineWrapping : true,
		lineNumbers : true,
      });

       var output = CodeMirror.fromTextArea(document.getElementById('output-html'), {
		mode : {

			name: 'htmlmixed'
		},
		lineWrapping : true,
		lineNumbers : true,
      });
