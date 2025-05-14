<?php
$company_name = "YourITGuy";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQs | <?php echo $company_name; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .faq-container {
            max-width: 800px;
            margin: 50px auto;
        }
        .faq-item {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-4 text-center">
    <div class="faqs-heading mb-4">
        <h2 class="display-4 text-primary">Frequently Asked Questions</h2>
    </div>
        <div class="container faq-container">
            <div class="accordion" id="faqAccordion">

                <!-- Question 1 -->
                <div class="accordion-item faq-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                            How long does a typical computer repair take?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Repair times vary depending on the issue. Simple fixes can take a few hours, while complex hardware repairs may require a few days.
                        </div>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="accordion-item faq-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                            What are the common signs of a failing hard drive?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Common signs include slow performance, frequent crashes, unusual noises, and disappearing files. If you suspect a failing hard drive, back up your data immediately.
                        </div>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="accordion-item faq-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                            Why is my computer overheating?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Overheating can be caused by dust buildup, poor ventilation, or a failing cooling system. Cleaning the fans and ensuring proper airflow can help.
                        </div>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="accordion-item faq-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                            How can I speed up a slow computer?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Try deleting unnecessary files, upgrading RAM, running disk cleanup, or reinstalling the operating system for a fresh start.
                        </div>
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="accordion-item faq-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                            Do you offer virus removal services?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes! We specialize in detecting and removing viruses, malware, and spyware from your system while ensuring data protection.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
