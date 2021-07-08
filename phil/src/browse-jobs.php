<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Search Jobs</title>
</head>
<body class="relative">
    <button class="hidden cursor-default absolute click-outside  inset-0 focus:outline-none h-full w-full z-50"></button>
    <header class="py-5 container relative flex flex-row justify-between items-center">
        <a href="/" class="text-xl text-primary-text brand font-bold">SkillsHub</a>
        <ul
            class="nav hidden shadow-lg md:shadow-none px-5 md:px-0 space-y-6 md:space-y-0 py-10 md:py-0 md:flex flex-col-reverse md:flex-row justify-between  absolute top-0 h-64 md:h-auto bg-white md:bg-transparent  md:top-0 md:relative  md:w-auto md:space-x-10 text-sm font-medium left-0 right-0">
            <li><a href="<?= Inaki::path() ?>browse-jobs" class="hover:text-blue-700">Find a Job</a></li>
            <li><a href="<?= Inaki::path() ?>candidates-profile" class="hover:text-blue-700">My Jobs</a></li>
            <li>
                <Span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
            </Span>
        </li>
            <li class="relative z-50">
                <Span class="user-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </Span>
                <div class="hidden transition-all delay-100 500ms user-tab w-48 rounded shadow-lg absolute z-50 md:-left-36 bg-white">
                    <ul class="text-xs py-2 box-content">
                        <li class="hover:bg-gray-50 cursor-pointer text-black"><a href="#" class="px-4 py-3 block w-full">iamacquaye@gmail.com</a></li>
                        <li class="hover:bg-gray-50 cursor-pointer text-black"><a href="candidates-profile.html" class="px-4 py-3 block w-full">Profile</a></li>
                        <li class=" hover:bg-gray-50 cursor-pointer text-black"><a href="#" class="px-4 py-3 block w-full">My Jobs</a></li>
                        <li class="hover:bg-gray-50 cursor-pointer text-black"><a href="#" class="px-4 py-3 block w-full">Notifications</a></li>
                    </ul>
                </div>
            </li>
            <span class="absolute md:hidden toggle-close top-0 right-5 mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
            </span>
        </ul>
        <span class="block md:hidden toggle-open">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </span>
    </header>
    <main>
        <section class="container my-10">
            <form>
                <div
                    class="flex flex-col space-y-5 md:space-y-0 md:flex-row md:space-x-10 bg-light-blue px-5 md:px-10 py-5 rounded">
                    <div class="flex flex-row items-center w-full md:w-1/2 bg-white h-14 px-5 rounded-md shadow-lg">
                        <span class="pr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="text" placeholder="Job title, keywords or company"
                            class="text-sm h-12 w-full focus:outline-none">
                    </div>
                    <div class="flex flex-row items-center w-full md:w-1/2 bg-white h-14 px-5 rounded-md shadow-lg">
                        <span class="pr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span>
                        <input type="text" placeholder="City or state" class="text-sm h-12 w-full focus:outline-none">
                    </div>
                    <a href="browse-jobs.html" class="w-48 bg-green-light text-white py-4 shadow-lg font-bold text-center h-14 rounded">Find Jobs</a>
                </div>
            </form>
            <div class="flex flex-col space-y-3 md:space-y-0 items-start md:flex-row my-5 md:items-center md:space-x-4">
                <div class="relative">
                    <select id="" class="text-sm appearance-none w-full py-4 pr-10 pl-4 rounded shadow focus:outline-none">
                        <option value="Date posted">Date Posted</option>
                    </select>
                    <span class="absolute top-4 right-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                    </span>
                </div>
                <div class="relative">
                    <select id="" class="text-sm appearance-none w-full py-4 pr-10 pl-4 rounded shadow focus:outline-none">
                        <option value="Job Type">Job Type</option>
                    </select>
                    <span class="absolute top-4 right-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                    </span>
                </div>
                <div class="relative">
                    <select id="" class="text-sm appearance-none w-full py-4 pr-10 pl-4 rounded shadow focus:outline-none">
                        <option value="Location">Location</option>
                    </select>
                    <span class="absolute top-4 right-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                    </span>
                </div>
            </div>
        </section>
        <section class="container my-10">
            <div class="flex flex-col md:flex-row items-start justify-between space-y-5 md:space-y-0 md:space-x-10">
                <div class="boxes w-full flex flex-col space-y-10">
                    <?php 
$jobs =  DB::QueryBuilder("select * from job");
// echo '<pre>';
// print_r($jobs);

// echo '</pre>';
foreach ($jobs as $key => $value) { ?>
 <div class="box border px-5 py-8 w-full rounded">
                        <div>
                            <h4 class="font-bold text-2xl"><?= ucfirst($value['title']) ?></h4>
                            <p class="text-sm mt-1"><?= ucfirst($value['company']) ?></p>
                            <p class="text-sm font-medium mt-1"></p>
                        </div>
                        <ul class="list-disc ml-6 text-sm my-3 flex flex-col space-y-2">
                            <li><?= ucfirst($value['summary']) ?></li>
                          </ul>
                        <div class="text-sm flex flex-row items-center justify-between mt-5">
                            <p class="date font-medium"><?= Inaki::timeAgo($value['posted']) ?>.</p>
                            <a href="<?= Inaki::path() ?>browse-jobs?job=<?= $value['id'] .'&ref=' . $value['jid'] ?>" class="font-medium hover:text-blue-700">See more...</a>
                        </div>
                    </div>
<?php }

?>
                   
                  
                </div>
                <div class="w-full border px-10 py-8 rounded">
                    <?php 
if(isset($_GET['job'])){
$jobdetails = DB::select('job',['*'],'id', strip_tags($_GET['job']));


$othrdetails = json_decode($jobdetails[0]['details'], true); 
?>

                    <div>
                        <h4 class="font-bold text-2xl"><?= ucfirst($jobdetails[0]['title'] ) ?></h4>
                        <p class="text-sm mt-1"><?= ucfirst($jobdetails[0]['company'] ) ?></p>
                        <p class="text-sm font-medium mt-1">Full time</p>
                    </div>
                    <a href="<?= Inaki::path() ?>application-page?<?= time() ?>&apply=<?= $jobdetails[0]['id'] .'&job='.$jobdetails[0]['jid'] ?>" class="secondary-btn py-3 w-full my-5 block">Apply Now</a>
                    <div class="text-sm">
                        <p class="mb-10">
                            <?= $jobdetails[0]['summary'] ?>
                       </p>
                        <p class="mb-10"><?= $othrdetails['description'] ?></p>
                       <p class="mb-10">We are recruiting to fill the position below:</p>
                        <ul class="my-2 flex flex-col space-y-3">
                            <li>Job Position: <?= ucfirst($jobdetails[0]['title']) ?></li>
                            <li>Job Location: <?= $othrdetails['country'].','.  $othrdetails['state'] ?></li>
                            <li>Employment Type: Full-time</li>
                            <li>Salary range: <?= $othrdetails['salary'] ?></li>
                        </ul>
                    </div>

                </div>
          <?php   }



?>
            </div>
        </section>
    </main>
    <footer class="bg-darker-blue py-10">
        <div class="container flex flex-col space-y-7 lg:space-y-0 lg:flex-row justify-between lg:space-x-24 text-xs">
         <div>
             <h1 class="font-bold text-2xl text-white">SkillsHub</h1>
             <p class="text-white py-4">Connect with us on:</p>
             <div class="icons">
                 <ul class="flex space-x-10">
                     <li><a href="#"><svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M3.08618 18.5032C3.08798 26.0872 8.60288 32.5447 16.0932 33.7333V22.9586H12.182V18.5032H16.0978V15.1115C15.9228 13.5044 16.4717 11.9027 17.5958 10.7408C18.7199 9.57888 20.3025 8.97723 21.9146 9.09901C23.0716 9.11769 24.2258 9.22074 25.3679 9.40734V13.1983H23.4192C22.7484 13.1104 22.0739 13.332 21.5858 13.8006C21.0978 14.2692 20.8489 14.934 20.9094 15.6079V18.5032H25.1813L24.4984 22.9601H20.9094V33.7333C29.01 32.4531 34.6905 25.0549 33.8355 16.8984C32.9805 8.74191 25.8894 2.68248 17.6994 3.10991C9.50932 3.53733 3.08748 10.302 3.08618 18.5032Z"
                                     fill="white" />
                             </svg>
                         </a></li>
                     <li><a href="#"><svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M30.8258 10.3106C32.2078 9.48441 33.2418 8.18347 33.7349 6.65069C32.4363 7.42122 31.0154 7.964 29.5339 8.25557C27.4797 6.08263 24.2251 5.55384 21.5887 6.96466C18.9523 8.37549 17.5867 11.3767 18.255 14.2912C12.9357 14.0241 7.97976 11.5114 4.62052 7.37836C2.8674 10.4022 3.76328 14.2677 6.66785 16.2121C5.61753 16.1783 4.5905 15.894 3.6724 15.3827C3.6724 15.4104 3.6724 15.4382 3.6724 15.4659C3.673 18.6158 5.89297 21.329 8.98035 21.9533C8.00612 22.2183 6.98421 22.2573 5.9926 22.0674C6.86087 24.7611 9.3435 26.6065 12.1731 26.6615C9.82955 28.5009 6.9353 29.4984 3.95606 29.4936C3.428 29.4943 2.90035 29.464 2.37585 29.4026C5.40121 31.3467 8.92234 32.3786 12.5185 32.3749C17.5216 32.4093 22.3297 30.4369 25.8674 26.899C29.405 23.361 31.377 18.5527 31.3422 13.5496C31.3422 13.2629 31.3355 12.9777 31.3222 12.694C32.6179 11.7576 33.7362 10.5976 34.6244 9.26844C33.4173 9.8035 32.1369 10.1548 30.8258 10.3106Z"
                                     fill="white" />
                             </svg>
                         </a></li>
                     <li><a href="#"><svg width="40" height="39" viewBox="0 0 40 39" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M21.6667 34.125H15V14.625H21.6667V17.875C23.0877 16.1123 25.2427 15.0614 27.5417 15.0101C31.676 15.0325 35.012 18.3127 35 22.3438V34.125H28.3333V23.1562C28.0667 21.3405 26.4696 19.9933 24.5883 19.9972C23.7655 20.0226 22.9887 20.3739 22.4374 20.97C21.8861 21.5661 21.6077 22.3556 21.6667 23.1562V34.125ZM11.6667 34.125H5V14.625H11.6667V34.125ZM8.33333 11.375C6.49238 11.375 5 9.91993 5 8.125C5 6.33007 6.49238 4.875 8.33333 4.875C10.1743 4.875 11.6667 6.33007 11.6667 8.125C11.6667 8.98695 11.3155 9.8136 10.6904 10.4231C10.0652 11.0326 9.21739 11.375 8.33333 11.375Z"
                                     fill="white" />
                             </svg>
                         </a>
                     </li>
                 </ul>
             </div>
             <p class="text-white mt-4 text-xs">2021 SkillsHub</p>
         </div>
         <div class="flex flex-col space-y-7 md:space-y-0 md:flex-row md:space-x-24 justify-between text-xs">
             <div>
                 <h1 class="text-base md:text-xl font-bold text-white mb-5">Contact</h1>
                 <ul class="text-white flex flex-col space-y-2 text-xs">
                     <li><a href="#">hello@skillshub.com</a></li>
                     <li><a href="#">+234 703 467 7166</a></li>
                     <li><a href="#">Innovation Hub Wuse,Abuja.</a></li>
                 </ul>
             </div>
             <div>
                 <h1 class="text-base md:text-xl font-bold text-white mb-5">About Us</h1>
                 <ul class="text-white flex flex-col space-y-2 text-xs">
                     <li><a href="#">How it Works</a></li>
                     <li><a href="#">Blog</a></li>
                 </ul>
             </div>
             <div>
                 <h1 class="text-base md:text-xl font-bold text-white mb-5">Help Centre</h1>
                 <ul class="text-white flex flex-col space-y-2 text-xs">
                     <li><a href="#">Complaints</a></li>
                     <li><a href="#">support@skillshub.com</a></li>
                     <li><a href="#">FAQs</a></li>
                 </ul>
             </div>
        </div>
        </div>
     </footer>
     <script src="js/main.js"></script>
</body>
</html>