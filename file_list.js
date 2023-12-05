import fs from "node:fs";
import path from "node:path";

// Directory path to the theme directory (within the current working directory)
const themeDirectory = path.join(process.cwd(), 'theme'); // Replace 'theme_directory' with your theme directory name
const urlPrefix = 'https://demo.crater.com.tr/mimod/';

// Function to generate URLs and save them to a text file
function generateURLs() {
  fs.readdir(themeDirectory, (err, files) => {
    if (err) {
      console.error('Error reading directory:', err);
      return;
    }

    // Filter PHP files
    const phpFiles = files.filter(file => path.extname(file).toLowerCase() === '.php');

    // Construct URLs with prefix
    const urlList = phpFiles.map(file => `${urlPrefix}${file}`).join('\n');

    // Write URLs to a text file
    fs.writeFile('url_list.txt', urlList, err => {
      if (err) {
        console.error('Error writing file:', err);
        return;
      }
      console.log('URL list generated successfully!');
    });
  });
}

// Call the function to generate and save the URL list
generateURLs();
