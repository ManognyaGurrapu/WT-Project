const sgMail=require('@sendgrid/mail')
const API_KEY="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";
sgMail.setApiKey(API_KEY)
const message={ 
    to: 'manognyaamvr@gmail.com',
    from: 'projectbyzodiac@gmail.com',
    subject: 'Confirmation from SendGrid!',
    text: '',
};
sgMail.send(message)
      .then(response=>console.log("email sent"))
      .catch(error=>console.log("Error"))