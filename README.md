# Top-250-IMDb-Laravel-SPARQL

## Made by

| Name                      | NPM           |
|---------------------------|---------------|
| Aliya Rahmania            | 140810210005  |
| [Adinda Salsabila](https://github.com/adindaaasals)          | 140810210017  |
| [Raditya Muhamad Lacavi](https://github.com/RML1812)    | 140810210019  |

## Project Description

This project is designed to showcase the top 250 movies as listed on IMDb. It utilizes SPARQL queries to fetch data and Laravel for the web application framework. The data is structured and stored using RDF format, and Jena Fuseki server is employed to manage and query the dataset.

## Steps to Run the Web

1. **Install Jena Fuseki Server**
   - Refer to the [Jena Fuseki documentation](https://jena.apache.org/documentation/fuseki2/) for installation instructions.

2. **Load RDF Data**
   - Load the `movies.owl` and `movies.ttl` files located in the `Preparing Data > result-rdf` folder into the Fuseki server, and name the dataset `movie`.

3. **Run Development Server**
   - Execute `npm run dev` to start the development server.
   
4. **Serve the Application**
   - Run `php artisan serve` to serve the Laravel application.

## Screenshots
![Screenshot 2024-06-24 194128](https://github.com/RML1812/Top-250-IMDb-Laravel-SPARQL/assets/100260624/26142efd-618d-414d-ab31-947b50745ad4)
![Screenshot 2024-06-24 194158](https://github.com/RML1812/Top-250-IMDb-Laravel-SPARQL/assets/100260624/171dc047-bf20-4e5d-81b0-515e73538efd)
![Screenshot 2024-06-24 194209](https://github.com/RML1812/Top-250-IMDb-Laravel-SPARQL/assets/100260624/e4bb4ca6-5838-4bfa-8ae2-d0a37ad4bb8b)
![Screenshot 2024-06-24 194232](https://github.com/RML1812/Top-250-IMDb-Laravel-SPARQL/assets/100260624/bc595a0a-6e5b-424b-881f-70784d367910)
![Screenshot 2024-06-24 194257](https://github.com/RML1812/Top-250-IMDb-Laravel-SPARQL/assets/100260624/5e9c03a1-5be4-4be8-82a9-ed9d327f3f88)
