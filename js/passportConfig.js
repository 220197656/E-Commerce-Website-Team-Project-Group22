//used to setup passport.js for authenticating users

const LocalStrategy = require('passport-local').Strategy;
const bcrypt = require('bcrypt');
const User = require('./models/user'); // Update with the path to your User model

module.exports = function(passport) {
    passport.use(
        new LocalStrategy({ usernameField: 'username' }, async (username, password, done) => {
            // Match user
            const user = await User.findOne({ where: { username } });
            if (!user) {
                return done(null, false, { message: 'That username is not registered' });
            }

            // Match password
            try {
                if (await bcrypt.compare(password, user.passwordHash)) {
                    return done(null, user);
                } else {
                    return done(null, false, { message: 'Password incorrect' });
                }
            } catch (e) {
                return done(e);
            }
        })
    );

    passport.serializeUser((user, done) => {
        done(null, user.id);
    });

    passport.deserializeUser((id, done) => {
        User.findById(id, (err, user) => {
            done(err, user);
        });
    });
};
