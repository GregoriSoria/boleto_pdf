# boleto_pdf

Examples
Send PDF to browser without specifying a name
`$html2pdf->output(); `
Send the PDF document in browser with a specific name
`$html2pdf->output('my_doc.pdf'); `
Forcing the download of PDF via web browser, with a specific name
`$html2pdf->output('my_doc.pdf', 'D'); `
Write the contents of a PDF file on the server
`$html2pdf->output('/absolute/path/file_xxxx.pdf', 'F');`
Retrieve the contents of the PDF and then do whatever you want
`$pdfContent = $html2pdf->output('my_doc.pdf', 'S');`