<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Uttar Baherchar Badminton Tournament 2026</title>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Rajdhani', sans-serif;
      background: linear-gradient(135deg, #0a0a1a 0%, #0d1b2a 50%, #1b263b 100%);
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* Animated background particles */
    .bg-particles {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      overflow: hidden;
      z-index: 0;
    }

    .particle {
      position: absolute;
      width: 2px;
      height: 2px;
      background: #00d4ff;
      border-radius: 50%;
      animation: float 15s infinite;
      opacity: 0.3;
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(100vh) rotate(0deg);
        opacity: 0;
      }
      10% {
        opacity: 0.3;
      }
      90% {
        opacity: 0.3;
      }
      100% {
        transform: translateY(-100vh) rotate(720deg);
        opacity: 0;
      }
    }

    /* Neon glow effects */
    .neon-text {
      font-family: 'Orbitron', sans-serif;
      color: #fff;
      text-shadow: 
        0 0 5px #00d4ff,
        0 0 10px #00d4ff,
        0 0 20px #00d4ff,
        0 0 40px #0077ff;
    }

    .neon-border {
      border: 2px solid #00d4ff;
      box-shadow: 
        0 0 5px #00d4ff,
        0 0 10px #00d4ff,
        inset 0 0 5px rgba(0, 212, 255, 0.1);
    }

    .neon-glow {
      box-shadow: 
        0 0 10px rgba(0, 212, 255, 0.3),
        0 0 20px rgba(0, 212, 255, 0.2),
        0 0 30px rgba(0, 212, 255, 0.1);
    }

    /* Card styling */
    .leaderboard-card {
      background: linear-gradient(180deg, rgba(13, 27, 42, 0.9) 0%, rgba(10, 10, 26, 0.95) 100%);
      backdrop-filter: blur(10px);
      border-radius: 16px;
      overflow: hidden;
      animation: slideUp 0.8s ease-out forwards;
      opacity: 0;
      transform: translateY(30px);
    }

    .leaderboard-card:nth-child(2) {
      animation-delay: 0.2s;
    }

    @keyframes slideUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Header styling */
    .group-header {
      background: linear-gradient(90deg, rgba(0, 212, 255, 0.2) 0%, rgba(0, 119, 255, 0.1) 100%);
      border-bottom: 1px solid rgba(0, 212, 255, 0.3);
      padding: 1rem 1.5rem;
    }

    /* Table styling */
    .leaderboard-table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
    }

    .leaderboard-table th {
      font-family: 'Orbitron', sans-serif;
      font-size: 0.65rem;
      font-weight: 600;
      color: #00d4ff;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      padding: 0.75rem 0.5rem;
      background: rgba(0, 212, 255, 0.05);
      border-bottom: 1px solid rgba(0, 212, 255, 0.2);
    }

    .leaderboard-table td {
      padding: 0.75rem 0.5rem;
      color: #e0e0e0;
      font-size: 0.9rem;
      font-weight: 500;
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
      transition: all 0.3s ease;
    }

    .leaderboard-table tbody tr {
      animation: fadeIn 0.5s ease-out forwards;
      opacity: 0;
      transition: all 0.3s ease;
    }

    .leaderboard-table tbody tr:hover {
      background: rgba(0, 212, 255, 0.1);
      transform: scale(1.01);
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
      }
    }

    /* Staggered animation for rows */
    .leaderboard-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
    .leaderboard-table tbody tr:nth-child(2) { animation-delay: 0.15s; }
    .leaderboard-table tbody tr:nth-child(3) { animation-delay: 0.2s; }
    .leaderboard-table tbody tr:nth-child(4) { animation-delay: 0.25s; }
    .leaderboard-table tbody tr:nth-child(5) { animation-delay: 0.3s; }
    .leaderboard-table tbody tr:nth-child(6) { animation-delay: 0.35s; }
    .leaderboard-table tbody tr:nth-child(7) { animation-delay: 0.4s; }
    .leaderboard-table tbody tr:nth-child(8) { animation-delay: 0.45s; }

    /* Rank badge styling */
    .rank-badge {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 28px;
      height: 28px;
      border-radius: 8px;
      font-family: 'Orbitron', sans-serif;
      font-weight: 700;
      font-size: 0.85rem;
    }

    .rank-1 {
      background: linear-gradient(135deg, #ffd700 0%, #ffaa00 100%);
      color: #1a1a2e;
      box-shadow: 0 0 15px rgba(255, 215, 0, 0.5);
    }

    .rank-2 {
      background: linear-gradient(135deg, #c0c0c0 0%, #a0a0a0 100%);
      color: #1a1a2e;
      box-shadow: 0 0 10px rgba(192, 192, 192, 0.4);
    }

    .rank-3 {
      background: linear-gradient(135deg, #cd7f32 0%, #b87333 100%);
      color: #1a1a2e;
      box-shadow: 0 0 10px rgba(205, 127, 50, 0.4);
    }

    .rank-other {
      background: rgba(0, 212, 255, 0.15);
      color: #00d4ff;
      border: 1px solid rgba(0, 212, 255, 0.3);
    }

    /* Team icon styling */
    .team-icon {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid rgba(0, 212, 255, 0.5);
      box-shadow: 0 0 10px rgba(0, 212, 255, 0.3);
      transition: all 0.3s ease;
    }

    .team-icon:hover {
      transform: scale(1.1);
      box-shadow: 0 0 20px rgba(0, 212, 255, 0.5);
    }

    .team-icon-placeholder {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: linear-gradient(135deg, #00d4ff 0%, #0077ff 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Orbitron', sans-serif;
      font-size: 0.75rem;
      font-weight: 700;
      color: #0a0a1a;
      border: 2px solid rgba(0, 212, 255, 0.5);
      box-shadow: 0 0 10px rgba(0, 212, 255, 0.3);
    }

    /* Stats styling */
    .stat-win {
      color: #00ff88;
      font-weight: 600;
    }

    .stat-lose {
      color: #ff6b6b;
      font-weight: 600;
    }

    .stat-points {
      color: #00d4ff;
      font-weight: 700;
      font-family: 'Orbitron', sans-serif;
    }

    /* Main title animation */
    .main-title {
      animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {
      0%, 100% {
        text-shadow: 
          0 0 5px #00d4ff,
          0 0 10px #00d4ff,
          0 0 20px #00d4ff,
          0 0 40px #0077ff;
      }
      50% {
        text-shadow: 
          0 0 10px #00d4ff,
          0 0 20px #00d4ff,
          0 0 40px #00d4ff,
          0 0 80px #0077ff;
      }
    }

    /* Badminton icon animation */
    .badminton-icon {
      animation: bounce 2s ease-in-out infinite;
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    /* Responsive adjustments */
    @media (min-width: 768px) {
      .leaderboard-table th {
        font-size: 0.75rem;
        padding: 1rem;
      }
      
      .leaderboard-table td {
        font-size: 1rem;
        padding: 1rem;
      }
      
      .rank-badge {
        width: 36px;
        height: 36px;
        font-size: 1rem;
      }
      
      .team-icon, .team-icon-placeholder {
        width: 40px;
        height: 40px;
      }
    }

    @media (min-width: 1024px) {
      .leaderboard-table th {
        font-size: 0.85rem;
      }
      
      .leaderboard-table td {
        font-size: 1.1rem;
      }
      
      .rank-badge {
        width: 40px;
        height: 40px;
        font-size: 1.1rem;
      }
      
      .team-icon, .team-icon-placeholder {
        width: 48px;
        height: 48px;
      }
    }

    /* Scrollbar styling */
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-track {
      background: #0a0a1a;
    }

    ::-webkit-scrollbar-thumb {
      background: linear-gradient(180deg, #00d4ff 0%, #0077ff 100%);
      border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(180deg, #00e5ff 0%, #0088ff 100%);
    }
  </style>
</head>
<body>
  <!-- Background particles -->
  <div class="bg-particles">
    @for ($p = 0; $p < 50; $p++)
      <div class="particle" style="left: {{ rand(0, 100) }}%; animation-delay: {{ rand(0, 15) }}s; animation-duration: {{ rand(10, 20) }}s;"></div>
    @endfor
  </div>

  <!-- Main content -->
  <div class="relative z-10 min-h-screen px-3 py-6 md:px-6 lg:px-8">
    
    <!-- Header -->
    <header class="text-center mb-8 md:mb-12">
      <div class="inline-block mb-4">
        <svg class="badminton-icon w-12 h-12 md:w-16 md:h-16 mx-auto mb-4" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="32" cy="20" r="12" stroke="#00d4ff" stroke-width="2" fill="none"/>
          <line x1="32" y1="32" x2="32" y2="58" stroke="#00d4ff" stroke-width="3" stroke-linecap="round"/>
          <line x1="24" y1="20" x2="40" y2="20" stroke="#00d4ff" stroke-width="1.5"/>
          <line x1="32" y1="8" x2="32" y2="32" stroke="#00d4ff" stroke-width="1.5"/>
          <ellipse cx="32" cy="20" rx="8" ry="10" stroke="#00d4ff" stroke-width="1" stroke-dasharray="2 2"/>
        </svg>
      </div>
      <h1 class="main-title neon-text text-2xl md:text-4xl lg:text-5xl font-bold tracking-wider mb-2">
        UTTAR BAHERCHAR
      </h1>
      <h2 class="neon-text text-xl md:text-2xl lg:text-3xl font-semibold tracking-wide mb-4">
        BADMINTON TOURNAMENT 2026
      </h2>
      <div class="flex flex-col items-center justify-center gap-4">
        <div class="h-px w-16 md:w-32 bg-gradient-to-r from-transparent via-cyan-400 to-transparent"></div>
        <span class="text-cyan-400 text-sm md:text-base font-medium tracking-widest">LEADERBOARD</span>
        <span class="text-cyan-400 text-sm md:text-base font-medium tracking-widest">Season 2</span>
        <div class="h-px w-16 md:w-32 bg-gradient-to-r from-transparent via-cyan-400 to-transparent"></div>
      </div>
    </header>

    <!-- Leaderboard Grid -->
    <div class="max-w-4xl mx-auto">
      
      <!-- Group A -->
      <div class="leaderboard-card neon-border neon-glow">
        <div class="group-header">
          <h3 class="neon-text text-lg md:text-xl font-bold tracking-wider flex items-center gap-3">
            <span class="inline-flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-lg bg-gradient-to-br from-cyan-400 to-blue-600 text-white font-bold text-sm md:text-base">8</span>
            Round OF 8
          </h3>
        </div>
        <div class="overflow-x-auto">
          <table class="leaderboard-table">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-left">Team</th>
                <th class="text-center">MP</th>
                <th class="text-center">W</th>
                <th class="text-center">L</th>
                <th class="text-center">PTS</th>
                <th class="text-center">+/-</th>
              </tr>
            </thead>
            <tbody>
              @php($i = 1)
              @foreach ($teams_a as $item)
                <tr>
                  <td class="text-center">
                    <span class="rank-badge {{ $i == 1 ? 'rank-1' : ($i == 2 ? 'rank-2' : ($i == 3 ? 'rank-3' : 'rank-other')) }}">
                      {{ $i }}
                    </span>
                  </td>
                  <td>
                    <div class="flex items-center gap-3">
                      @if($item->team_icon_image)
                        <img src="{{ asset($item->team_icon_image) }}" alt="{{ $item->team_name }}" class="team-icon">
                      @else
                        <div class="team-icon-placeholder">
                          {{ strtoupper(substr($item->team_name, 0, 2)) }}
                        </div>
                      @endif
                      <span class="font-semibold text-white truncate max-w-[100px] md:max-w-[150px]">{{ $item->team_name }}</span>
                    </div>
                  </td>
                  <td class="text-center">{{ $item->match_played }}</td>
                  <td class="text-center stat-win">{{ $item->win }}</td>
                  <td class="text-center stat-lose">{{ $item->lose }}</td>
                  <td class="text-center stat-points">{{ $item->points }}</td>
                  <td class="text-center {{ $item->points_plus_min >= 0 ? 'text-green-400' : 'text-red-400' }}">
                    {{ $item->points_plus_min >= 0 ? '+' : '' }}{{ $item->points_plus_min }}
                  </td>
                </tr>
                @php($i++)
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>

    <!-- Footer -->
    <footer class="text-center mt-10 md:mt-16 pb-6">
      <div class="flex items-center justify-center gap-4 mb-4">
        <div class="h-px w-16 md:w-24 bg-gradient-to-r from-transparent via-cyan-400/50 to-transparent"></div>
        <div class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></div>
        <div class="h-px w-16 md:w-24 bg-gradient-to-r from-transparent via-cyan-400/50 to-transparent"></div>
      </div>
      <p class="text-cyan-400/60 text-xs md:text-sm tracking-wider">
        © 2026 Uttar Baherchar Badminton Tournament
      </p>
    </footer>

  </div>

</body>
</html>