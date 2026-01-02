# 🏸 Badminton Tournament Leaderboard Management System

A modern, responsive leaderboard management system designed for the **Uttar Baherchar Badminton Tournament 2026**. This application provides real-time team rankings, match statistics, and a stunning neon-themed display interface.

---

## ✨ Key Features

- 🎯 **Team Management** - Add, update, and delete tournament teams
- 📊 **Live Leaderboard** - Real-time team rankings with automatic sorting
- 🏆 **Match Statistics** - Track matches played, wins, losses, and points
- 🎨 **Beautiful UI** - Modern neon-themed interface with smooth animations
- 📱 **Fully Responsive** - Optimized for mobile, tablet, and desktop devices
- 🌟 **Animated Display** - Smooth transitions and neon glow effects
- 🔐 **Admin Panel** - Secure team management interface
- ⚡ **Fast & Efficient** - Built with Laravel and Tailwind CSS

---

## 🚀 Quick Start

### Prerequisites
- PHP 8.0 or higher
- Composer
- Node.js & npm
- MySQL or similar database

### Installation

1. **Clone the repository**
```bash
git clone <repository-url>
cd leaderboard-management
```

2. **Install dependencies**
```bash
composer install
npm install
```

3. **Setup environment**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configure database**
Update your `.env` file with database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=leaderboard
DB_USERNAME=root
DB_PASSWORD=
```

5. **Run migrations**
```bash
php artisan migrate
php artisan migrate:fresh  # if you need to reset the database
```

6. **Build assets**
```bash
npm run dev
```

7. **Start the server**
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

---

## 📖 Usage

### Accessing the Leaderboard
- **Frontend Display**: Navigate to `/` to view the public leaderboard
- **Admin Panel**: Access `/admin/leaderboard` for management features

### Adding a Team
1. Go to Admin Panel → Team Management
2. Click "Add New Team"
3. Enter team details:
   - Team Name
   - Group (A or B)
   - Team Icon (optional)
4. Click Save

### Updating Match Statistics
1. Navigate to the leaderboard view
2. Select the team to edit
3. Update:
   - Matches Played (MP)
   - Wins (W)
   - Losses (L)
   - Points (Pts)
   - Point Difference (+/-)
4. Save changes

### Deleting a Team
1. Go to Team Management
2. Find the team in the list
3. Click Delete (confirmation required)

---

## 🏗️ Project Structure

```
leaderboard-management/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── admin/
│   │   │       ├── TeamController.php
│   │   │       └── LeaderboardController.php
│   │   └── Requests/
│   └── Models/
│       └── Leaderboard.php
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── admin/
│       │   ├── leaderboard/
│       │   └── team-management/
│       └── client-side/
│           └── index.blade.php
├── routes/
│   ├── web.php
│   └── api.php
├── public/
│   └── admin/
│       └── img/
│           └── team-icons/
└── config/
```

---

## 🎨 Design Features

### Color Scheme
- **Primary**: Neon Cyan (#00d4ff)
- **Secondary**: Deep Blue (#0077ff)
- **Background**: Dark Gradient (#0a0a1a to #1b263b)
- **Accents**: Gold (1st), Silver (2nd), Bronze (3rd)

### Typography
- **Headings**: Orbitron (Futuristic)
- **Body**: Rajdhani (Modern & Clean)

### Animations
- ✨ Floating particle background
- 🎯 Slide-up card animations
- 🔄 Staggered row fade-ins
- 💫 Pulsing neon effects
- 🎪 Hover interactions with scale transforms

---

## 🔧 Technologies Used

### Backend
- **Laravel 10** - PHP web framework
- **MySQL** - Database
- **Eloquent ORM** - Database abstraction

### Frontend
- **Blade Templates** - PHP templating engine
- **Tailwind CSS** - Utility-first CSS framework
- **Custom CSS** - Advanced animations and effects
- **Google Fonts** - Orbitron, Rajdhani

### Tools & Libraries
- **Vite** - Build tool and dev server
- **Composer** - PHP dependency manager
- **npm** - JavaScript package manager

---

## 📱 Responsive Breakpoints

- **Mobile**: < 640px
- **Tablet**: 640px - 1024px
- **Desktop**: > 1024px

The leaderboard automatically adjusts fonts, spacing, and layout for optimal viewing on all devices.

---

## 🔐 Security Features

- CSRF protection on all forms
- Input validation and sanitization
- Secure image upload handling
- Directory creation with proper permissions

---

## 📊 Database Schema

### Leaderboards Table
```sql
- id (Primary Key)
- team_name (String)
- team_icon_image (String, nullable)
- team_group (String: A, B)
- match_played (Integer)
- win (Integer)
- draw (Integer)
- lose (Integer)
- points (Integer)
- points_plus_min (Integer)
- timestamps
```

---

## 🐛 Troubleshooting

### Issue: "SQLSTATE[HY000]: General error: 1030"
**Solution**: Run `php artisan migrate:fresh`

### Issue: Images not displaying
**Solution**: Ensure `public/admin/img/team-icons/` directory exists with proper permissions

### Issue: Assets not loading
**Solution**: Run `npm run dev` or `npm run build`

### Issue: Database connection error
**Solution**: Verify `.env` file has correct database credentials

---

## 👨‍💻 Development

### Building Assets
```bash
npm run dev      # Development mode with hot reload
npm run build    # Production build
```

### Database Management
```bash
php artisan migrate           # Run migrations
php artisan migrate:fresh     # Reset and run migrations
php artisan migrate:rollback  # Rollback last batch
php artisan tinker            # Interactive PHP shell
```

### Running Tests (if configured)
```bash
php artisan test
```

---

## 📝 API Endpoints

### Leaderboard Routes
- `GET /` - Public leaderboard display
- `GET /api/leaderboard/group-a` - Get Group A teams (JSON)
- `GET /api/leaderboard/group-b` - Get Group B teams (JSON)

### Admin Routes
- `GET /admin/leaderboard/a` - View Group A leaderboard
- `GET /admin/leaderboard/b` - View Group B leaderboard
- `GET /admin/team-management` - Team list
- `POST /admin/team-management` - Create team
- `GET /admin/leaderboard/{id}/edit` - Edit team stats
- `POST /admin/leaderboard/{id}/update` - Update team stats
- `DELETE /admin/team-management/{id}` - Delete team

---

## 📄 License

This project is open source and available under the MIT License.

---

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📞 Support

For issues, questions, or suggestions, please open an issue on the repository.

---

## 🎯 Upcoming Features

- [ ] Live match updates with WebSocket
- [ ] Team comparison statistics
- [ ] Historical match records
- [ ] Player-specific statistics
- [ ] Tournament brackets visualization
- [ ] Mobile app version

---

**Built with ❤️ for the Uttar Baherchar Badminton Tournament 2026**
