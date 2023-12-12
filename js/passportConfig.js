console.log(__dirname); //debug step
console.log('Requiring bcrypt'); // Debug step
const bcrypt = require('bcrypt');
console.log('bcrypt required successfully'); // Debug step

console.log('Requiring passport-local'); // Debug step
const LocalStrategy = require('passport-local').Strategy;
console.log('passport-local required successfully'); // Debug step

console.log('Loading Client model from passportConfig'); // Debugging step
const Client = require('../models/Client');

module.exports = function(passport) {
    console.log('Configuring passport'); // Debug step
    passport.use(new LocalStrategy({ usernameField: 'username' }, async (username, password, done) => {
        console.log('Local strategy called with', { username, password }); // Debug step
        try {
            // Match user
            console.log('Attempting to find client'); // Debug step
            const client = await Client.findOne({ where: { Username: username } });
            console.log('Client find result:', client); // Debug step

            if (!client) {
                console.log('Client not found'); // Debug step
                return done(null, false, { message: 'That username is not registered' });
            }

            // Match password
            console.log('Matching password'); // Debug step
            if (await bcrypt.compare(password, client.Password)) {
                console.log('Password match successful'); // Debug step
                return done(null, client);
            } else {
                console.log('Password match failed'); // Debug step
                return done(null, false, { message: 'Password incorrect' });
            }
        } catch (e) {
            console.error('Error in LocalStrategy:', e); // Debug step
            return done(e);
        }
    }));

    // Serializing the user / data to store in session
    passport.serializeUser((client, done) => {
        console.log('Serializing user:', client); // Debug step
        done(null, client.ClientID); // Store user's ClientID in the session
    });

    // Deserializing the user from the session
    passport.deserializeUser((id, done) => {
        console.log('Deserializing user by id:', id); // Debug step
        Client.findByPk(id).then((client) => {
            console.log('Deserialized user found:', client); // Debug step
            done(null, client); // Retrieve user info from the db using ClientID
        }).catch(error => {
            console.error('Error deserializing user:', error); // Debug step
            done(error);
        });
    });
};
