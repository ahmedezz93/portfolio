// 'use strict';

// (function () {
//   // Full Toolbar Configuration
//   const fullToolbar = [
//     [
//       { font: [] },
//       { size: [] }
//     ],
//     ['bold', 'italic', 'underline', 'strike'],
//     [
//       { color: [] },
//       { background: [] }
//     ],
//     [
//       { script: 'super' },
//       { script: 'sub' }
//     ],
//     [
//       { header: '1' },
//       { header: '2' },
//       'blockquote',
//       'code-block'
//     ],
//     [
//       { list: 'ordered' },
//       { list: 'bullet' },
//       { indent: '-1' },
//       { indent: '+1' }
//     ],
//     [{ direction: 'rtl' }],
//     ['link', 'image', 'video', 'formula'],
//     ['clean']
//   ];

//   // Initialize the Full Editor
//   const fullEditor = new Quill('#full-editor', {
//     bounds: '#full-editor',
//     placeholder: 'Type Something...',
//     modules: {
//       formula: true,
//       toolbar: fullToolbar
//     },
//     theme: 'snow'
//   });

//   // Pre-fill the editor with old content (if available)
//   fullEditor.root.innerHTML = document.getElementById('primary_details').value;

//   // Synchronize editor content with hidden input on form submission
//   const form = document.querySelector('form');
//   form.addEventListener('submit', function () {
//     // Set the hidden input value with Quill editor content
//     document.getElementById('primary_details').value = fullEditor.root.innerHTML.trim();
//   });

// })();
