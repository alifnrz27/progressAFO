<div>
    <div class="w-screen h-screen flex justify-between">
        <div class="hidden lg:block lg:w-2/12 h-full bg-[#0134b2] p-4 text-white">
            <div class="text-center text-l font-bold mb-4">
                Sistem Monitoring AFO
            </div>
            <hr>
            <div>
                <div class="flex gap-2 items-center mt-4 px-2 cursor-pointer">
                    <div>
                        <img src="{{ asset('src/img/icons/home.png') }}" class="w-[22px]" alt="">
                    </div>
                    <div>
                        Dashboard
                    </div>
                </div>
                <div class="flex gap-2 items-center mt-4 px-2 cursor-pointer">
                    <div>
                        <img src="{{ asset('src/img/icons/dashboard.png') }}" class="w-[22px]" alt="">
                    </div>
                    <div>
                        Monitoring Pasien
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-10/12 flex flex-col">
            <div class="p-4 flex justify-end items-center w-full">
                <div class="flex items-center gap-4 justify-end w-full">
                    <div class="text-gray-600">
                        Rudi
                    </div>
                    <div class="w-[30px] h-[30px] overflow-hidden rounded-full">
                        <img src="{{ asset('src/img/mihun.jpg') }}" class="w-[30px]" alt="">
                    </div>
                </div>
            </div>
            <div class="bg-gray-300 p-4 w-full h-full">
                <div class="font-semibold text-[27px] mt-3 mb-5">
                    Monitoring Data Pasien
                </div>
                <div class=" rounded-lg shadow-xl">
                    <div class="w-full p-3 font-bold text-[#0134b2] bg-white border-b-2 rounded-t-lg">
                        Data Pasien
                    </div>
                    <div class="p-5 bg-white rounded-b-lg">
                        <div class="w-full">
                            <table class="table-auto w-full border-collapse border border-gray-30y">
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 font-bold text-gray-500">No Rekam Medis</td>
                                        <td class="border border-gray-300 px-4 py-2">1</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 font-bold text-gray-500">Nama</td>
                                        <td class="border border-gray-300 px-4 py-2">Rudi</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 font-bold text-gray-500">Tanggal Lahir</td>
                                        <td class="border border-gray-300 px-4 py-2">3 Juni 1993</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 font-bold text-gray-500">Tanggal Rehab</td>
                                        <td class="border border-gray-300 px-4 py-2">30 April 2024</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 font-bold text-gray-500">Tinggi Badan</td>
                                        <td class="border border-gray-300 px-4 py-2">30 April 2024</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 font-bold text-gray-500">Berat Badan</td>
                                        <td class="border border-gray-300 px-4 py-2">30 April 2024</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <button class="btn bg-blue-600 text-white p-1 rounded" onclick="onSubmit()">
                            Submit
                        </button>
                        <p id="timer"></p>
                        <div>
                            <canvas id="myChart"></canvas>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const onSubmit = () => {
        // Set the countdown duration in milliseconds (5 minutes)
        const countdownDuration = 15 * 60 * 1000;
        
        // Calculate the target time by adding the countdown duration to the current time
        const targetTime = new Date().getTime() + countdownDuration;
        
        // Update the countdown every millisecond
        const timerInterval = setInterval(() => {
          const now = new Date().getTime();
          const distance = targetTime - now;
        
          // Calculate remaining time in minutes, seconds, and milliseconds
          const minutes = Math.floor(distance / (1000 * 60));
          const seconds = Math.floor((distance % (1000 * 60)) / 1000);
          const milliseconds = Math.floor((distance % 1000));
        
          // Display the countdown
          document.getElementById('timer').innerHTML = `${minutes}m ${seconds}s`;
        
          // If the countdown is over, stop the timer
          if (distance < 0) {
            clearInterval(timerInterval);
            document.getElementById('timer').innerHTML = 'Countdown expired';
          }
        }, 1); // Update every millisecond
    }
    const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>