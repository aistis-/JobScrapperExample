<?php

/**
 * @copyright C UAB NFQ Technologies 2017
 *
 * This Software is the property of NFQ Technologies
 * and is protected by copyright law – it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license key
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * Contact UAB NFQ Technologies:
 * E-mail: info@nfq.lt
 * http://www.nfq.lt
 */

namespace Acme\JobBundle\Unit\Guesser;

use Acme\JobBundle\Guesser\ExperienceGuesser;
use PHPUnit\Framework\TestCase;

/**
 * @package Acme\JobBundle\Unit\Guesser
 */
class ExperienceGuesserTest extends TestCase
{
    /**
     * @param string $content
     * @param int    $expected
     *
     * @dataProvider getData
     */
    public function testGetNeededExperience(string $content, int $expected): void
    {
        $guesser = new ExperienceGuesser();

        $this->assertEquals($expected, $guesser->getNeededExperience($content));
    }

    /**
     * @return array
     */
    public function getData()
    {
        return [
            [
                'Data Science Manager - Premium Analytics We are looking for a Data Science Manager to join the Premium Analytics team in New York. As Data Scientists, our mission is to turn terabytes of data into insights and get a deep understanding of how people use our apps to impact the product, strategy and direction of Spotify. You will study user behavior, strategic initiatives, content, and new features and bring data and insights into every decision we make. Above all, your work will impact the way the world experiences music. We are fueling our Premium Business growth with data driven insights. Data scientists in this area will be answering questions such as How can we accelerate Premium subscriber growth through efficient upsells? How do we measure and attribute channel performance? How do we most efficiently convert users to Premium? How do we prioritize which upsells to show to whom? How do we optimize a portfolio of different consumer offerings? As a Data Science Manager you’ll be a hands-on leader of a team of 2-6 professionals from the Premium Analytics team focused on driving Premium subscriber and revenue growth. What you’ll do: Manage and coach a team of 2-6 high performing data scientists Own analysis of large sets of data to extract actionable insights that will help drive business decisions Communicate data-driven insights and recommendations to key stakeholders Partner with business owners, product owners, and data scientists who are passionate about Spotify’s success Conduct A/B tests to drive iterative improvement through efficient experimentation Build lasting solutions to surface critical data and performance metrics Contribute to the development of Premium Analytics and the Analytics Community at Spotify Work from our offices in New York Who you are: You have at least 6+ years of experience in a similar data analyst or data science role and a degree in science, computer science, statistics, economics, mathematics, or similar quantitative discipline Direct people management experience with a track record of building and leading expert teams You have experience working close to the core business with a focus on driving direct business impact Ideally you have experience within one or more of the areas of subscription business, upsell, performance based advertising, pricing, portfolio optimization, user lifecycle analysis You have strong business acumen You have a deep understanding of numbers and a desire to coach and train others You are clear in communication and adept at presenting and explaining complex topics and recommendations in simple terms You have the technical competence to perform more advanced analytics: Coding skills for analytics and data extraction (such as SQL, R, Python, Pandas) Data visualization (such as Tableau, Qlik, D3, ggplot) Experience performing analysis with large datasets Experience building statistical models is a plus You are capable of tackling very loosely defined problems We are proud to foster a workplace free from discrimination. We strongly believe that diversity of experience, perspectives, and background will lead to a better environment for our employees and a better product for our users and our creators. This is something we value deeply and we encourage everyone to come be a part of changing the way the world listens to music.',
                6,
            ],
            [
                'Spotify seeks an exceptional leader to drive our data-first strategy within the Finance and Advertising team at Spotify. Analysts at Spotify turn terabytes of data into insights, to get a deep understanding of finance, advertising and user behavior to impact our strategy and direction. We are looking for a leader to drive these efforts and bring data and insights into every decision we make. Most importantly, your work will impact the way the world experiences music. What you’ll do: Lead a team of analysts in extracting actionable insights from large sets of data. Communicate data-driven insights and recommendations to key stakeholders Work closely with various teams and senior management across Finance, Advertising and the wider business - Using data to impact their decisions Take a lead in utilizing data to form strategy for Finance and Advertising Who you are: You have at least 8+ years of experience in a combination of data analyst roles or strategy roles, ideally in a media business or working with finance and advertising analytics teams, and you have also led a team You have a deep understanding of numbers and experience performing analysis with large datasets You have the technical competence to perform more advanced analytics: Coding skills (such as Python, Java, or Scala) Analytics tools experience (such as Pandas, R, SPSS, SQL, Hadoop, Sense or Tableau) You have a proven track record of turning very loosely defined problems into data-driven solutions You are a communicative person that values building strong relationships with colleagues and stakeholders and have the ability to explain complex topics in simple terms You are a leader and have experience in managing teams. You can motivate and mobilize your team and help them to develop, as well as influence other stakeholders to follow your lead and implement new initiatives You have a high level of comfort interfacing with all levels of management (externally and internally) and can communicate cross-functionally in a structured and clear manner to influence outcomes You are skilled at leading and executing complex projects spanning multiple stakeholders, and know how to get things done in a larger organization where you are not always in direct control of all the resources and competencies needed to get the job done We are proud to foster a workplace free from discrimination. We strongly believe that diversity of experience, perspectives, and background will lead to a better environment for our employees and a better product for our users and our creators. This is something we value deeply and we encourage everyone to come be a part of changing the way the world listens to music.',
                8,
            ],
            [
                'Senior Data Scientist - Legal We seek an outstanding Senior Data Scientist — Legal to join our New York office. This individual will lead data-related work for the company’s international Legal team. Working within the company’s Finance Analytics team, you will work closely with our central Data team, embedded functional data scientists, and data engineers throughout the company. Your work will inform the Legal team’s strategy across cutting-edge digital legal issues, including copyright and privacy. Because of the breadth of issues handled by our Legal team, you will have the rare opportunity to dive deeply into data around all corners of the company. Above all, you will be at the nexus of data science and cutting edge data issues at one of the most innovative companies in the world. In addition to possessing strong technical background of his/her own, the ideal candidate will be a natural communicator who is able to explain complex statistical and analytical frameworks to business and engineering teams in both New York and Stockholm. Accompanying this broad set of responsibilities is exposure to many functional areas, as well as senior management, across Spotify. There will be heavy emphasis on gathering stakeholder requirements (including translating the underlying legal issues into data-driven tasks), and calibrating the appropriate level of rigor for each task. Accompanying this broad set of responsibilities is exposure to all functional areas, as well as senior management, across Spotify. What you\'ll do: Take ownership of all of Spotify’s Legal team’s data and analytics needs. Work on task-driven analyses (both short-term/one-off and long-term/deep-dive) with data engineers and data scientists throughout the company. Identify relevant data sets, learn their complexities, and deliver results. Create models to support decision-making, including litigation risk/exposure, effects of potential product features on Legal resource needs, etc. Identify areas for improved efficiency for the Legal team’s data needs and work with relevant counterparts throughout the company to propose and implement dashboards and other tools. Be a thought leader within the Legal team as the team implements policies and processes governing the company’s compliance with data/privacy regulations. Who you are: B.A. / B.S. in Economics, Statistics, Computer Science, or another quantitative field. Minimum of 5 years of relevant experience. Background in legal matters is a plus, but not required. Willingness to learn relevant legal concepts as underpinnings of analysis a must. Precision in analysis, including ability to document assumptions in, and weaknesses of, a model. Extensive experience manipulating and analyzing complex data with SQL and other tools, such as Python. Familiarity with Google BigQuery is a plus. Comfort operating independently in a fast-paced work environment. Experience in interfacing with senior business leaders across multiple time zones. Strong communication skills, including ability to speak tech to a non-tech audience and to translate complex business/legal needs into specifically-defined deliverables. We are proud to foster a workplace free from discrimination. We strongly believe that diversity of experience, perspectives, and background will lead to a better environment for our employees and a better product for our users and our creators. This is something we value deeply and we encourage everyone to come be a part of changing the way the world listens to music.',
                5,
            ],
        ];
    }
}
