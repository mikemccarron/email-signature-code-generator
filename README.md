# HTML Signature Generator

1. Reads all the images located in the `source_images` directory.
2. Generates an HTML snippet and stores the snippet in the `signatures` directory

### Notes

The HTML snippet contains a line with a transparent character to address an issue when adding this signature snippet to Gmail which results in the image tag not rendering when an email is received in Mail.app on iOS or macOS. This may not be the best solution so feel free to adjust accordingly.
