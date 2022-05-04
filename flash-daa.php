<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style5.css" />
    <?php include 'includes/head.php'; ?>
    <title></title>
  </head>
  <body>
  <?php include 'includes/navbarLogout.php'; ?>
    <section class="section-plans" id="section-plans">
      <div class="row">
        <div class="col-1-of-3">
          <div class="card">
            <div class="card__side card__side--front-1">
              <div class="card__title card__title--1">
      
                <h4 class="card__heading">DBMS</h4>
              </div>

              <div class="card__details">
               <p class ="text">A database management system (DBMS) is software that handles the storage, retrieval, and updating of data in a computer system. It serves as an interface between the end user and the database and manages the data, database engine, and database schema to facilitate the organization and manipulation of data</p>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-1">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only"></p>
                  <p class="card__price-value">

                    Candidate Key: The minimal set of attributes which can determine a tuple uniquely. There can be more than 1 candidate key of a relation and its proper subset can’t determine tuple uniquely and it can’t be NULL. <br>
                    <br>
                    Super Key: The set of attributes which can determine a tuple uniquely. A candidate key is always a super key but vice versa is not true.
                    </p>
                </div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-1-of-3">
          <div class="card">
            <div class="card__side card__side--front-2">
              <div class="card__title card__title--2">
                
                <h4 class="card__heading">KEYS</h4>
              </div>

              <div class="card__details">
               <p class ="text" >Primary Key and Alternate Key: Among various candidate keys, one key is taken primary key and others are alternate keys.
                 <br>
                 <br>
                Foreign Key: Foreign Key is a set of attributes in a table which is used to refer the primary key or alternative key of the same or other table.</p>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-2">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only"></p>
                  <p class="card__price-value">
                    Attribute: Attributes are the properties that define a relation. e.g.; ROLL_NO, NAME
                    <br>
                    <br>
Relation Schema: A relation schema represents name of the relation with its attributes. e.g.; STUDENT (ROLL_NO, NAME, ADDRESS, PHONE and AGE) is relation schema for STUDENT. If a schema has more than 1 relation, it is called Relational Schema.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-1-of-3">
          <div class="card">
            <div class="card__side card__side--front-3">
              <div class="card__title card__title--3">
          
                <h4 class="card__heading">Normal Forms</h4>
              </div>

              <div class="card__details">
                <p class ="text">First Normal Form: A relation is in first normal form if it does not contain any multi-valued or composite attribute.
                 <br>
                 <br>
                  Second Normal Form: A relation is in second normal form if it does not contain any partial dependency. A dependency is called partial dependency if any proper subset of candidate key determines non-prime (which are not part of candidate key) attribute.</p>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-3">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only"></p>
                  <p class="card__price-value">Third Normal Form: A relation is in third normal form if it does not contain any transitive dependency. For a relation to be in Third Normal Form, either LHS of FD should be super key or RHS should be prime attribute.
                   <br>
                   <br>
                    Boyce-Codd Normal Form: A relation is in Boyce-Codd Normal Form if LHS of every FD is super key. The relationship between Normal Forms can be represented as: 1NF⊃2NF ⊃3NF ⊃BCNF</p>
                </div>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>