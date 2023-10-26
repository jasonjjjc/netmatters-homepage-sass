<div class="latest">
        <div class="latest-news">
          <h1 class="latest-news-title">Latest News</h1>
          <div class="latest-news-cards">
            <?php
            $sql = "SELECT * FROM news";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo '<a href="#" class="latest-news-cards-' . $row["id"] . '">';

                echo '<div class="latest-news-cards-' . $row["id"] . '-upper">';
                echo '<p class="latest-news-cards-' . $row["id"] . '-upper-tag">' . $row["tag"] . '</p>';
                echo '<img alt="' . $row["title"] . ' thumbnail" class="latest-news-' . $row["id"] . '-thumb" src="' . $row["thumbnail"] . '"/>';
                echo '</div>';

                echo '<div class="latest-news-cards-' . $row["id"] . '-lower">';
                echo '<h3 class="latest-news-cards-' . $row["id"] . '-lower-title">' . $row["title"] . '</h3>';
                echo '<p class="latest-news-cards-' . $row["id"] . '-lower-desc">' . $row["description"] . '</p>';
                echo '<div class="latest-news-cards-' . $row["id"] . '-lower-button">READ MORE</div>';

                echo '<div class="latest-news-cards-' . $row["id"] . '-lower-author">';
                echo '<div class="latest-news-cards-' . $row["id"] . '-lower-author-img">';
                echo '<img alt="user picture" src="' . $row["author_image"] . '"/>';
                echo '</div>';
                echo '<div class="latest-news-cards-' . $row["id"] . '-lower-author-details">';
                echo '<p class="latest-news-cards-' . $row["id"] . '-lower-author-name">Posted by ' . $row["author_name"] . '</p>';
                echo '<p class="latest-news-cards-' . $row["id"] . '-lower-author-date">' . $row["post_date"] . '</p>';
                echo '</div>';

                echo '</div>'; // End of author div
                echo '</div>'; // End of lower div

                echo '</a>';
              }
            } else {
              echo "No news found!";
            }
            ?>
          </div>

          <div class="latest-news-view">
            <a href="#" class="latest-news-view-wrapper">
              <h3>View All</h3>
              <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <title>arrow-right</title>
                <path d="M11.293 5.707l5.293 5.293h-11.586c-0.552 0-1 0.448-1 1s0.448 1 1 1h11.586l-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l7-7c0.092-0.092 0.166-0.202 0.217-0.324 0.101-0.245 0.101-0.521 0-0.766-0.049-0.118-0.121-0.228-0.217-0.324l-7-7c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="latest-clients">
          <div class="latest-clients-list">
            <div>
              <!-- Slick slide -->
              <img alt="ashcroft logo" class="slick-slide-image" src="./assets/clients/ashcroftlogo_landscape_goldblack_DP60P-small.png" />
              <div class="slick-slide-description">
                <h3 class="slick-slide-description-title">
                  Ashcroft Partnership LLP
                </h3>
                <p class="slick-slide-description-summary">
                  Originally founded in 2006 as Ashcroft Anthony, they became
                  Ashcroft Partnership LLP in 2020 and are one of the top
                  chartered accountancy firms in Cambridge, advising
                  entrepreneurs and families.
                </p>
                <a class="slick-slide-description-link purple" href="#" target="_blank">View our case study</a>
              </div>
            </div>
            <div>
              <!-- Slick slide -->
              <img alt="beat logo" class="slick-slide-image" src="./assets/clients/beat_logo.png" />
              <div class="slick-slide-description">
                <h3 class="slick-slide-description-title">BEAT</h3>
                <p class="slick-slide-description-summary">
                  The UK's eating disorder charity founded in 1989.
                </p>
              </div>
            </div>
            <div>
              <!-- Slick slide -->
              <img alt="black swan logo" class="slick-slide-image" src="./assets/clients/black_swan_logo.png" />
              <div class="slick-slide-description">
                <h3 class="slick-slide-description-title">
                  Black Swan Care Group
                </h3>
                <p class="slick-slide-description-summary">
                  Black Swan Care Group own and manage 21 high-quality care
                  and residential homes with a focus on putting the needs of
                  their residents first.
                </p>
                <a class="slick-slide-description-link grey" href="#" target="_blank">View our case study</a>
              </div>
            </div>
            <div>
              <!-- Slick slide -->
              <img alt="crane garden buildings logo" class="slick-slide-image" src="./assets/clients/crane_logo.png" />
              <div class="slick-slide-description">
                <h3 class="slick-slide-description-title">
                  Crane Garden Buildings
                </h3>
                <p class="slick-slide-description-summary">
                  Leading manufacturer and supplier of high-end garden rooms,
                  summerhouses, workshops and sheds in the UK.
                </p>
              </div>
            </div>
            <div>
              <!-- Slick slide -->
              <img alt="girl guides anglia logo" class="slick-slide-image" src="./assets/clients/girl_guides_anglia_logo.png" />
              <div class="slick-slide-description">
                <h3 class="slick-slide-description-title">
                  Girl Guiding Anglia
                </h3>
                <p class="slick-slide-description-summary">
                  Girl Guiding Anglia is part of Girlguiding, the UK's leading
                  charity for girls and young women in the UK.
                </p>
                <a class="slick-slide-description-link blue" href="#" target="_blank">View our case study</a>
              </div>
            </div>
            <div>
              <!-- Slick slide -->
              <img alt="girls day school trust logo" class="slick-slide-image" src="./assets/clients/girls_day_school_trust_logob.png" />
              <div class="slick-slide-description">
                <h3 class="slick-slide-description-title">GDST</h3>
                <p class="slick-slide-description-summary">
                  The Girls' Day School Trust (GDST) is the UK's leading
                  family of 25 independent girls' schools.
                </p>
                <a class="slick-slide-description-link green" href="#" target="_blank">View our case study</a>
              </div>
            </div>
            <div>
              <!-- Slick slide -->
              <img alt="howes percival logo" class="slick-slide-image" src="./assets/clients/howespercivallogo.png" />
              <div class="slick-slide-description">
                <h3 class="slick-slide-description-title">Howes Percival</h3>
              </div>
            </div>
            <div>
              <!-- Slick slide -->
              <img alt="one traveller logo" class="slick-slide-image" src="./assets/clients/onetravellerlogo_white_figuire.png" />
              <div class="slick-slide-description">
                <h3 class="slick-slide-description-title">One Traveller</h3>
                <p class="slick-slide-description-summary">
                  One Traveller, founded in 2007, is a leading provider of
                  solo holidays for over 50s.
                </p>
                <a class="slick-slide-description-link purple" href="#" target="_blank">View our case study</a>
              </div>
            </div>
            <div>
              <!-- Slick slide -->
              <img alt="searles logo" class="slick-slide-image" src="./assets/clients/searles_logo.jpeg" />
              <div class="slick-slide-description">
                <h3 class="slick-slide-description-title">
                  Searles Leisure Resort
                </h3>
                <p class="slick-slide-description-summary">
                  Searles Leisure Resort, on the beautiful North Norfolk
                  coast, is an award-winning UK holiday resort for families.
                </p>
                <a class="slick-slide-description-link green" href="#" target="_blank">View our case study</a>
              </div>
            </div>
            <div>
              <!-- Slick slide -->
              <img alt="survey solutions logo" class="slick-slide-image" src="./assets/clients/survey_solutions_logo.png" />
              <div class="slick-slide-description">
                <h3 class="slick-slide-description-title">
                  Survey Solutions
                </h3>
              </div>
            </div>
            <div>
              <!-- Slick slide -->
              <img alt="sweetzy logo" class="slick-slide-image" src="./assets/clients/sweetzy_logo.png" />
              <div class="slick-slide-description">
                <h3 class="slick-slide-description-title">Sweetzy</h3>
                <p class="slick-slide-description-summary">
                  Sweetzy are an online sweets retailer, based in Wymondham.
                </p>
                <a class="slick-slide-description-link green" href="#" target="_blank">View our case study</a>
              </div>
            </div>
            <div>
              <!-- Slick slide -->
              <img alt="xupes logo" class="slick-slide-image" src="./assets/clients/xupes_logo.png" />
              <div class="slick-slide-description">
                <h3 class="slick-slide-description-title">Xupes</h3>
              </div>
            </div>
            <div>
              <!-- Slick slide -->
              <img alt="busseys logo" class="slick-slide-image" src="./assets/clients/busseys.png" />
              <div class="slick-slide-description">
                <h3 class="slick-slide-description-title">Busseys</h3>
                <p class="slick-slide-description-summary">
                  One of the UK's leading Ford dealerships.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>