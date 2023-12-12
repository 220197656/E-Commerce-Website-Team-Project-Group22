
console.log('Requiring bcrypt'); //debug setep
const bcrypt = require('bcrypt');
console.log('bcrypt required successfully'); //debug step

console.log('Requiring passport-local');
const LocalStrategy = require('passport-local').Strategy;
console.log('passport-local required successfully');

console.log('Loading Client model from passportConfig'); //debugging step

const Client = require('../models/Client'); 

module.exports = function(passport) {
    passport.use(
        new LocalStrategy({ usernameField: 'username' }, async (username, password, done) => {
            try {
                // Match user 
                const client = await Client.findOne({ where: { Username: username } });
                if (!client) {
                    return done(null, false, { message: 'That username is not registered' });
                }

                // Match password 
                if (await bcrypt.compare(password, client.Password)) {
                    return done(null, client);
                } else {
                    return done(null, false, { message: 'Password incorrect' });
                }
            } catch (e) {
                // Handle errors 
                return done(e);
            }
        })
    );

    // Serializing the user / data to store in session
    passport.serializeUser((client, done) => {
        done(null, client.ClientID); // Store user's ClientID in the session
    });

    // Deserializing the user from the session
    passport.deserializeUser((id, done) => {
        Client.findByPk(id).then((client) => {
            done(null, client); // Retrieve user info from the db using ClientID
        }).catch(done);
    });
};
