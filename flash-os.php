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
    <title></title>
  </head>
  <body>
    <section class="section-plans" id="section-plans">


      <div class="row">
        <div class="col-1-of-3">
          <div class="card">
            <div class="card__side card__side--front-1">
              <div class="card__title card__title--1">
      
                <h4 class="card__heading">Operating System</h4>
              </div>

              <div class="card__details">
               <p class ="text">An operating system (OS) is system software that manages computer hardware, software resources, and provides common services for computer programs.

                Time-sharing operating systems schedule tasks for efficient use of the system and may also include accounting software for cost allocation of processor time, mass storage, printing, and other resources.</p>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-1">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only"></p>
                  <p class="card__price-value">

                  Process:
                A process is a program under execution.
                <br> The value of program counter (PC) indicates the address of the next instruction of the process being executed. Each process is represented by a Process Control Block (PCB).
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
                
                <h4 class="card__heading">Threads</h4>
              </div>

              <div class="card__details">
               <p class ="text" >A thread is a lightweight process and forms the basic unit of CPU utilization. A process can perform more than one task at the same time by including multiple threads.
<br>
A thread has its own program counter, register set, and stack.
<br>
A thread shares resources with other threads of the same process the code section, the data section, files and signals.</p>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-2">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only"></p>
                  <p class="card__price-value">
                  Process Scheduling: Below are different times with respect to a process.
<br>
<br>
Arrival Time – Time at which the process arrives in the ready queue. <br>
Completion Time – Time at which process completes its execution.
<br>
Burst Time – Time required by a process for CPU execution.
<br>
Turn Around Time – Time Difference between completion time and arrival time.
<br>
Turn Around Time = Completion Time - Arrival Time 
<br>

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
          
                <h4 class="card__heading">Page Fault</h4>
              </div>

              <div class="card__details">
                <p class ="text">A page fault is a type of interrupt, raised by the hardware when a running program accesses a memory page that is mapped into the virtual address space, but not loaded in physical memory.</p>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-3">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only"></p>
                  <p class="card__price-value">A Semaphore is an integer variable that is accessed only through two atomic operations, wait () and signal (). An atomic operation is executed in a single CPU time slice without any pre-emption. Semaphores are of two types:
<br>
<br>
Counting Semaphore – A counting semaphore is an integer variable whose value can range over an unrestricted domain.
Mutex – A mutex provides mutual exclusion, either producer or consumer can have the key (mutex) and proceed with their work.</p>
                </div>
             
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </body>
</html>