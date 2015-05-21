-- Create user Ritchie
INSERT INTO user
( username
, email
, password
, first_name
, last_name
)
VALUES
( 'ritchiefitz'
, 'ritchiefitz1@gmail.com'
, 'Information1'
, 'Ritchie'
, 'Fitzgerald'
);

-- Create daily journal
INSERT INTO journal
( uid
, title
, theme
)
VALUES
( 1
, 'Daily Journal'
, 'default'
);

-- Insert page into daily journal
INSERT INTO page
( jid
, uid
, title
, event_date
, content
, page_number
)
VALUES
( 1
, 1
, 'First Day'
, '2015-05-19'
, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. \n\nEsse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. \n\nError, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit.'
, 1
);

INSERT INTO page
( jid
, uid
, title
, event_date
, content
, page_number
)
VALUES
( 1
, 1
, 'Second Day'
, '2015-05-20'
, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. \n\nEsse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. \n\nError, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit.'
, 2
);

INSERT INTO page
( jid
, uid
, title
, event_date
, content
, page_number
)
VALUES
( 1
, 1
, 'Thrid Day'
, '2015-05-21'
, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. \n\nEsse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. \n\nError, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit.'
, 3
);

INSERT INTO page
( jid
, uid
, title
, event_date
, content
, page_number
)
VALUES
( 1
, 1
, 'Fourth Day'
, '2015-05-22'
, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. \n\nEsse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. \n\nError, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit.'
, 4
);

INSERT INTO page
( jid
, uid
, title
, event_date
, content
, page_number
)
VALUES
( 1
, 1
, 'Fifth Day'
, '2015-05-23'
, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. \n\nEsse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. \n\nError, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit.'
, 5
);

INSERT INTO page
( jid
, uid
, title
, event_date
, content
, page_number
)
VALUES
( 1
, 1
, 'Sixth Day'
, '2015-05-34'
, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. \n\nEsse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. \n\nError, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit.'
, 6
);

-- Insert page into scripture journal
INSERT INTO journal
( uid
, title
, theme
)
VALUES
( 1
, 'Scripture Journal'
, 'default'
);

-- Insert page into scripture journal
INSERT INTO page
( jid
, uid
, title
, event_date
, content
, page_number
)
VALUES
( 2
, 1
, 'First Day'
, '2015-05-19'
, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. \n\nEsse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. \n\nError, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit.'
, 1
);

INSERT INTO page
( jid
, uid
, title
, event_date
, content
, page_number
)
VALUES
( 2
, 1
, 'Second Day'
, '2015-05-20'
, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. \n\nEsse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. \n\nError, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit.'
, 2
);

INSERT INTO page
( jid
, uid
, title
, event_date
, content
, page_number
)
VALUES
( 2
, 1
, 'Thrid Day'
, '2015-05-21'
, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. \n\nEsse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. \n\nError, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit.'
, 3
);

INSERT INTO page
( jid
, uid
, title
, event_date
, content
, page_number
)
VALUES
( 2
, 1
, 'Fourth Day'
, '2015-05-22'
, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. \n\nEsse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. \n\nError, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit.'
, 4
);

INSERT INTO page
( jid
, uid
, title
, event_date
, content
, page_number
)
VALUES
( 2
, 1
, 'Fifth Day'
, '2015-05-23'
, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. \n\nEsse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. \n\nError, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit.'
, 5
);

INSERT INTO page
( jid
, uid
, title
, event_date
, content
, page_number
)
VALUES
( 2
, 1
, 'Sixth Day'
, '2015-05-24'
, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. \n\nEsse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. \n\nError, dolores, reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse at laborum beatae incidunt perferendis blanditiis fugit, maiores explicabo dolore impedit aspernatur, non magnam eligendi a repellat labore. Error, dolores, reprehenderit.'
, 6
);
